<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Color;
use App\User;

use Redirect;
use Carbon\Carbon;
use LaravelAnalytics;
use Spatie\Analytics\Period;
use Spatie\Analytics;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Set dates
        $date = Period::days(7);
        // Get last visitors and pageviews of last 7 days
        $visitors_pageviews = LaravelAnalytics::fetchVisitorsAndPageViews($date);
        $chart_visitors = $this->visitors_pageviews($visitors_pageviews, 1);
        $chart_pageviews = $this->visitors_pageviews($visitors_pageviews, 2);

        // Get sessions by cities
        $result_cities = $this->sessions_cities($date);
        $result_cities = $result_cities->rows;

        // Get pageviews
        $pageviews = $this->pageviews($date);
        $pageviews = $pageviews->rows;
        $total_products = Product::count();
        $total_colors = Color::count();
        $total_categories = Category::count();
        $total_users = User::count();

        return view('dashboard.dashboard')
            ->with('pageviews', $pageviews)
            ->with('chart_visitors', $chart_visitors)
            ->with('chart_pageviews', $chart_pageviews)
            ->with('result_cities', $result_cities)
            ->with('total_products', $total_products)
            ->with('total_colors', $total_colors)
            ->with('total_users', $total_users)
            ->with('total_categories', $total_categories);
    }


    /**
     * Private function to get chart for visitors or pageviews
     *
     * @param Object $visitors_pageviews
     * @param  int 1
     * @return string $chart
     */
    private function visitors_pageviews($visitors_pageviews, $num)
    {
        $visitors = array(); $pageviews = array(); $dates = array();
        $visits = 0;
        $pages =0 ;
        // Get visitors and pageviews
        foreach($visitors_pageviews as $i => $vp){
            $visits = $visits + (int)$vp["visitors"];
            $pages = $pages + (int)$vp["pageViews"];
            $date = date('d-m-Y', strtotime($vp["date"]));
            if ($i>0){
                if ($temp!=$date || $i==count($visitors_pageviews)-1){
                    array_push($visitors, $visits);
                    array_push($pageviews, array($temp,$pages));
                    array_push($dates, $temp);
                    $pages = 0;
                    $visits = 0;
                }
            }
            $temp = date('d-m-Y', strtotime($vp["date"]));
        }
        if($num == 1){
            $chart = $this->visitors_chart('visitors', 'Visitantes', $visitors, $dates);
        }elseif($num == 2){
            $chart = $this->pageviews_chart('pageviews', 'Pageviews', $pageviews);
        }

        return $chart;
    }

    /**
     * Private function to get sessions by city
     *
     * @param timestamp $date1
     * @param  timestamp $date2
     * @return $result_cities
     */
    private function sessions_cities($date){
        $metrics = 'ga:sessions';
        $optParams = array();
        $optParams['dimensions']  = 'ga:country, ga:city';
        $optParams['sort'] = '-ga:sessions';
        $optParams['max-results'] = '10';

        $result_cities = LaravelAnalytics::performQuery($date, $metrics, $optParams);

        return $result_cities;
    }

    /**
     * Private function to get sessions by city
     *
     * @param timestamp $date1
     * @param  timestamp $date2
     * @return $pageviews
     */
    private function pageviews($date){
        $metrics = 'ga:pageviews';
        $optParams = array();
        $optParams['dimensions']  = 'ga:pagePath';
        $optParams['max-results'] = '20';
        $optParams['sort'] = '-ga:pageviews';

        $pageviews = LaravelAnalytics::performQuery($date, $metrics, $optParams);

        return $pageviews;
    }

    /**
     * Private function to get chart for visitors
     * [ Line Chart ]
     *
     * @param string $name_graph
     * @param string $title
     * @param array $visitors
     * @param  array $dates
     * @return string $chart
     */
    private function visitors_chart($name_graph, $title, $visitors, $dates){
        $chart = '';

        $chart .= "<script>";
        $chart .= "$('#".$name_graph."').highcharts({";
        $chart .= "title: { text: '".$title."' },";
        $chart .= "xAxis:{ categories: ".json_encode($dates)."},";
        $chart .= "yAxis:{title:{text:'# de visitantes'}, plotLines:[{value: 0, width: 1, color: '#808080'}]},";
        $chart .= "legend: {layout: 'vertical', align:'right',verticalAlign:'middle',borderWidth:0,enabled:false},";
        $chart .= "series:[";
        $chart .= "{name:'Visitantes',data:".json_encode($visitors)."}";
        $chart .= "]});";
        $chart .= "</script>";

        return $chart;
    }

    /**
     * Private function to get chart for visitors
     * [ Bar Chart ]
     *
     * @param string $name_graph
     * @param string $title
     * @param array $pageviews
     * @return string $chart
     */
    private function pageviews_chart($name_graph, $title, $pageviews){
        $chart = '';

        $chart .= "<script>";
        $chart .= "$('#".$name_graph."').highcharts({";
        $chart .= "chart:{ type: 'column' },";
        $chart .= "title:{ text: '".$title."' },";
        $chart .= "xAxis:{ type:'category',labels:{rotation:-45,style:{fontSize:'13px',fontFamily:'Verdana, sans-serif'}} },";
        $chart .= "yAxis:{ min:0, title:{text:'# de pageviews'} },";
        $chart .= "legend:{ enabled:false },";
        $chart .= "tooltip:{ pointFormat:'Pageviews: <b>{point.y}</b>' },";
        $chart .= "series:[";
        $chart .= "{name:'Pageviews',data:".json_encode($pageviews)."}";
        $chart .= "]});";
        $chart .= "</script>";

        return $chart;
    }


}
