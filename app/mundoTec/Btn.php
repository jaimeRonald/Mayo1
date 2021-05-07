<?php 
namespace App\mundoTec;
/**
 * 
 */
class Btn 
{
	
	public function a( $url ,$text=null)
	{
		 return view('contact',[
             'url'=>url($url),
             'text'=>is_null($text)? $url:$text
		 ]);
	}

	public function button($text,$class=null)
	{
		return view('btn.button',compact('text','class'));
	}
}
 ?>