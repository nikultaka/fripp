<?php
namespace App\Helper;
 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
 
class CommonHelper {
    /**
     * @param int $user_id User-id
     * 
     * @return string
     */
    private static $breadcrumn_data = [];
    public static function add_breadcrumb($pagename, $url = '') {
        
        $temp_array = array();
        $temp_array['name'] = $pagename;
        $temp_array['url'] = $url;
        self::$breadcrumn_data[] = $temp_array;
    }
    
    public static function get_breadcrumb()
    {
        $breadcrumb_str = '';
        $breadcrumb_str .= '<ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="'.URL::to('/admin/dashboard').'">Home</a></li>';
        if(!empty(self::$breadcrumn_data)){
            foreach(self::$breadcrumn_data as $breadcrumb){
                $breadcrumb_str .= '<li class="breadcrumb-item"><a href="'.$breadcrumb['url'].'">'.$breadcrumb['name'].'</a></li>';
            }
        }
        $breadcrumb_str .= '</ol>';
        return $breadcrumb_str;
    }
    public static function get_setting_details($fild_name,$return_fild){
       // DB::table('site_setting_option')->select()->get();
        $result =  DB::table('site_setting_option')
                    ->select($return_fild)
                    ->where('fild_name',$fild_name)
                    ->first();
        return $result->$return_fild;
    }
    public static function get_banner(){
        $language =  session()->get('user');
        $language_id = $language['language'];
        
        if($language_id == ''){
            $language_id = '1';
        }
         $slug =  \Request::path();
         
        if($slug == '' || $slug == '/'){
            $slug = 'home';
        }
        
        $result =  DB::table('banner')
                    ->select('*')
                    ->where('page_slug',$slug)
                    ->where('language_id',$language_id)
                    ->where('status',1)
                    ->get()->toarray();
       
        return $result;
    }
     public static function get_langauge_list(){
         $result =  DB::table('language')
                    ->where('status',1)
                    ->get()->toarray();
        return $result;
     }
     public static function get_selected_language(){
         $language =  session()->get('admin');
         
         if(!empty($language)){
            return $language['language'];
         }else{
             return '1';
         }
     }
     public static function user_selected_language(){
         $language =  session()->get('user');
         
         if(!empty($language)){
            return $language['language'];
         }else{
             return '1';
         }
     }
     public static function user_selected_language_name(){
         $language =  session()->get('user');
         
         if(!empty($language)){
            return $language['name'];
         }else{
             return 'ENGLISH';
         }
     }
     public static function user_selected_language_details(){
         $language =  session()->get('user');
         
         if(!empty($language)){
            return $language;
         }else{
             $data['user']['language'] = '1';
             $data['user']['name'] = 'ENGLISH';
             $data['user']['sort_name'] = 'en';
             return $data['user'];
         }
     }
}