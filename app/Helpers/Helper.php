<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use Route;
use Session;
use App;
use DB;
use App\Taxonomy;
use App\HinhAnhCompass;
use App\Term;
use App\ChuongTrinhDuHoc;
use App\ChuongTrinhHoc;
use Str;

class Helper
{

	/*
	|--------------------------------------------------------------------------
	| Detect Active Route
	|--------------------------------------------------------------------------
	|
	| Compare given route with current route and return output if they match.
	| Very useful for navigation, marking if the link is active.
	|isActiveRoute
	*/
	public static function isActiveRoute($route, $output = "active")
	{
	    if (Route::currentRouteName() == $route) return $output;
	}

	/*
	|--------------------------------------------------------------------------
	| Detect Active Routes
	|--------------------------------------------------------------------------
	|
	| Compare given routes with current route and return output if they match.
	| Very useful for navigation, marking if the link is active.
	|
	*/
	public static function areActiveRoutes(Array $routes, $output = "active")
	{
	    foreach ($routes as $route)
	    {
	        if (Route::currentRouteName() == $route) return $output;
	    }

	}

	public static function detectLocale()
	{
		$locale = Session::get('locale', config('app.locale'));
        App::setLocale($locale);
	}

	public static function index_multilanguage($table, $languages, $condition = false, $timestamp = true){
                   
        $dbs = DB::table($table.' as default_table');

        $db_select[] = 'default_table.*';
        $db_where[] = ['default_table.parent_tid', '=', '0'];

        if($condition)
        {
            foreach($condition as $c)
            {
                $db_where[] = ['default_table.'.$c['param1'], $c['param2'], $c['param3']];               
            }
        }

        foreach($languages as $key => $language)
        {
                $db_select[] = $key.'.id as id_'.$key;
        }         
        
        $dbs->where($db_where);
        $dbs->select($db_select);

        foreach($languages as $key => $language)
        { 
            $dbs->leftJoin($table.' as '.$key, function($join) use ($key){ $join->on($key.'.parent_tid', '=', 'default_table.id');});
        }

        if($timestamp) $dbs->orderBy('created_at','desc');
        else  $dbs->orderBy('default_table.id','desc');

        $pages = $dbs->paginate(config('options.compass.site.items_page'));

        return $pages;
	}

	public static function getCategories()
	{
		$locale = Session::get('locale', config('app.locale'));
		$categories = Category::select('slug','name')->where('language',$locale)->get();

		return $categories;
	}

	public static function removeActiveLanguage($locale)
	{
        $languages = config('options.languages');   
        unset($languages[$locale]);
        return $languages;
	}


    public static function getSingle_locale($single,$locale,$table){
        if($single->language  != $locale){
            if($single->parent_tid > 0)
            {
                $single_locale = DB::table($table)
                ->where([['parent_tid','=',$single->parent_tid],['language','=',$locale]])
                ->orwhere([['id','=',$single->parent_tid],['parent_tid','=',0],['language','=',$locale]]);
            }
            else
            {
                $single_locale = DB::table($table)->where('parent_tid',$single->id)
                ->where('language', $locale);
            }
            if($single_locale->count()>0){
                $single = $single_locale->first();
            }
        }

        return $single;
    } 


    public static function route_single_locale($slug,$locale,$nameRoute,$table){
    	$single = DB::table($table)->where('slug',$slug)->first();
    	$single = static::getSingle_locale($single,$locale,$table);
    	
    	return route($locale.'.'.$nameRoute,$single->slug);
    }

    public static function get_term_locale($table , $tid, $lang)
    {
        $term = DB::table($table)->where('id',$tid)->first();//dd($term);

        if($term->parent_tid != 0)
        {
            $translate_term = DB::table($table)
            ->where([['parent_tid','=',$term->parent_tid],['language','=',$lang]])
            ->orwhere([['id','=',$term->parent_tid],['language','=',$lang]])->first();
        }
        else
        {
            $translate_term = DB::table($table)->where('parent_tid',$term->id)->where('language',$lang)->first();
        }


        if(is_null($translate_term)) $output = $translate_term;
        else $output[$translate_term->id] = $translate_term->name;

        return $output;
    }

    public static function get_term_locale_1($table , $slug, $lang)
    {
        $term = DB::table($table)->where('slug',$slug)->first();//dd($term);

        if($term->parent_tid != 0)
        {
            $translate_term = DB::table($table)
            ->where([['parent_tid','=',$term->parent_tid],['language','=',$lang]])
            ->orwhere([['id','=',$term->parent_tid],['language','=',$lang]])->first();
        }
        else
        {
            $translate_term = DB::table($table)->where('parent_tid',$term->id)->where('language',$lang)->first();
        }


        $output = $translate_term;

        return $output;
    }


    public static function get_term_locale_2($slug_qg, $slug_cth, $lang)
    {
        $term_qg = DB::table('taxonomy_term_data')->where('slug',$slug_qg)->first();//dd($term);
        $term_cth = DB::table('taxonomy_term_data')->where('slug',$slug_cth)->first();//dd($term);


        $term = DB::table('taxonomy_term_data_chuongtrinhduhoc')->where('quocgia_id',$term_qg->id)->where('chuongtrinhhoc_id',$term_cth->id)->first();//dd($term);

        if($term->parent_tid != 0)
        {
            $translate_term = DB::table('taxonomy_term_data_chuongtrinhduhoc')
            ->where([['parent_tid','=',$term->parent_tid],['language','=',$lang]])
            ->orwhere([['id','=',$term->parent_tid],['language','=',$lang]])->first();
        }
        else
        {
            $translate_term = DB::table('taxonomy_term_data_chuongtrinhduhoc')->where('parent_tid',$term->id)->where('language',$lang)->first();
        }


        $output = $translate_term;

        return $output;
    }

    public static function hinhAnhCompass(){
        $hinhanhcompass = HinhAnhCompass::all();

        return $hinhanhcompass;
    }

    public static function duhoc($locale){
        $duhoc_vid = 1;   
        $duhoc = Term::where('vid', $duhoc_vid)->where('language',$locale)->get();

        return $duhoc;
    }

    public static function chuongtrinhduhoc($locale)
    {
        $duhoc_vid = 1;   
        $duhoc = self::duhoc($locale);



        $chuongtrinhhoc_vid = 2;   
        $chuongtrinhhoc = Term::where('vid', $chuongtrinhhoc_vid)->where('language',$locale)->get();

        foreach($chuongtrinhhoc as $c)
        {
            $cth[$c->id]['name'] = $c->name;
            $cth[$c->id]['slug'] = $c->slug;
        }
//dd($cth);
        foreach($duhoc as $dh)
        {
            $chuongtrinhduhoc = ChuongTrinhDuHoc::where('language',$locale)->where('quocgia_id',$dh->id)->pluck('chuongtrinhhoc_id','id');
            //if($dh->id == 2) dd($chuongtrinhduhoc);
            foreach($chuongtrinhduhoc as $c)
            {
                $ctdh[$dh->id][$c] = $cth[$c];         
            }

        }
        // dd($ctdh);
        return $ctdh;
    }


    public static function taxonomy()
    {
        $taxonomy = Taxonomy::all();        
        return $taxonomy;
    }
}