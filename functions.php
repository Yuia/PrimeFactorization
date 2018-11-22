<?php
function load7($num){
	$hoge = $num;
	return 0;
}
function load11($num){
	//$hoge = $num;
	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		for($i=$count;$i<=100000;$i++){
			if(15*($count-1)*($count-1)+25*($count-1) == 15*$i*$i+6*$count-9+6*($i-$count)-$K||
				15*($count-1)*($count-1)-25*($count-1) == 15*$i*$i+6*$count-9+6*($i-$count)-$K){
				if( axis_load11(11,$i,$count,$num)!=null){
					$answer = axis_load11(11,$i,$count,$num);
				}else{
					$answer = axis_load11(61,$i,$count,$num);
				}
				/*
				$hoge=($i-$count)*30+11;
				$answer = $num/$hoge;
				if($answer - round($answer)==0){
					//print(15*($count-1)*($count-1)+25*($count-1));
					//print(" ");
					$break;
				}else{
					$hoge=($i-$count)*30+61;
					$answer = $num/$hoge;
					//print(15*($count-1)*($count-1)+25*($count-1));
					//print(" ");
					$break;
				}
			}else if(15*($count-1)*($count-1)-25*($count-1) == 15*$i*$i+6*$count-9+6*($i-$count)-$K){
				if( axis_load11(11,$i,$count,$num)!=null){
					$answer = axis_load11(11,$i,$count,$num);
				}else{
					$answer = axis_load11(61,$i,$count,$num);
				}
				$hoge=($i-$count)*30+11;
				$answer = $num/$hoge;
				if($answer - round($answer)==0){
					//print((string)$answer);
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}else{
					$hoge=($i-$count)*30+61;
					$answer = $num/$hoge;
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}
				*/
			//axis31,41
			}else if(15*($count-1)*($count-1)-25*($count-1) == 15*$i*$i+6*$count-1+6*($i-$count)-$K||
				15*($count-1)*($count-1)+25*($count-1) == 15*$i*$i+6*$count-1+6*($i-$count)-$K){
				if( axis_load11(31,$i,$count,$num)!=null){
					$answer = axis_load11(31,$i,$count,$num);
				}else{
					$answer = axis_load11(41,$i,$count,$num);
				}
				
			/*
				$hoge=($i-$count)*30+31;
				$answer = $num/$hoge;
				if($answer - round($answer)==0){
					//print((string)$answer);
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}else{
					$hoge=($i-$count)*30+41;
					$answer = $num/$hoge;
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}
			}else if(15*($count-1)*($count-1)+25*($count-1) == 15*$i*$i+6*$count-1+6*($i-$count)-$K){
				$hoge=($i-$count)*30+31;
				$answer = $num/$hoge;
				if($answer - round($answer)==0){
					//print((string)$answer);
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}else{
					$hoge=($i-$count)*30+41;
					$answer = $num/$hoge;
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}
			*/
			//axis53,7
			}else if(15*($count-1)*($count-1)-23*($count-1) == 15*$i*$i-8-$K||
				15*($count-1)*($count-1)+23*($count-1) == 15*$i*$i-8-$K){
				if( axis_load11(53,$i,$count,$num)!=null){
					$answer = axis_load11(53,$i,$count,$num);
				}else{
					$answer = axis_load11(7,$i,$count,$num);
				}
			/*
				$hoge=($i-$count)*30+53;
				$answer = $num/$hoge;
				if($answer - round($answer)==0){
					//print((string)$answer);
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}else{
					$hoge=($i-$count)*30+7;
					$answer = $num/$hoge;
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}
			}else if(15*($count-1)*($count-1)+23*($count-1) == 15*$i*$i-8-$K){
				$hoge=($i-$count)*30+53;
				$answer = $num/$hoge;
				if($answer - round($answer)==0){
					//print((string)$answer);
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}else{
					$hoge=($i-$count)*30+7;
					$answer = $num/$hoge;
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}
			*/
			//axis37,23	
			}else if(15*($count-1)*($count-1)-7*($count-1) == 15*$i*$i-$K||
				15*($count-1)*($count-1)+7*($count-1) == 15*$i*$i-$K){
				if( axis_load11(37,$i,$count,$num)!=null){
					$answer = axis_load11(37,$i,$count,$num);
				}else{
					$answer = axis_load11(23,$i,$count,$num);
				}
			/*
				$hoge=($i-$count)*30+53;
				$answer = $num/$hoge;
				if($answer - round($answer)==0){
					//print((string)$answer);
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}else{
					$hoge=($i-$count)*30+7;
					$answer = $num/$hoge;
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}
			}else if(15*($count-1)*($count-1)+7*($count-1) == 15*$i*$i-$K){
				$hoge=($i-$count)*30+53;
				$answer = $num/$hoge;
				if($answer - round($answer)==0){
					//print((string)$answer);
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}else{
					$hoge=($i-$count)*30+7;
					$answer = $num/$hoge;
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}
			*/
			//axis43,17
			}else if(15*($count-1)*($count-1)-13*($count-1) == 15*$i*$i-2-$K||
				15*($count-1)*($count-1)+13*($count-1) == 15*$i*$i-2-$K){
				//print("hoge");
				if( axis_load11(43,$i,$count,$num)!=null){
					$answer = axis_load11(43,$i,$count,$num);
				//	break;
				}else{
					$answer = axis_load11(17,$i,$count,$num);
				//	break;
				}
			/*
				$hoge=($i-$count)*30+43;
				$answer = $num/$hoge;
				if($answer - round($answer)==0){
					//print((string)$answer);
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}else{
					$hoge=($i-$count)*30+7;
					$answer = $num/$hoge;
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}
			}else if(15*($count-1)*($count-1)+13*($count-1) == 15*$i*$i-2-$K){
				$hoge=($i-$count)*30+17;
				$answer = $num/$hoge;
				if($answer - round($answer)==0){
					//print((string)$answer);
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}else{
					$hoge=($i-$count)*30+7;
					$answer = $num/$hoge;
					//print(15*($count-1)*($count-1)-25*($count-1));
					//print(" ");
					$break;
				}
			*/
			//axis13,47
			}else if(15*($count-1)*($count-1)-17*($count-1) == 15*$i*$i-4-$K||
				15*($count-1)*($count-1)+17*($count-1) == 15*$i*$i-4-$K){
				//print("hoge");
				if( axis_load11(13,$i,$count,$num)!=null){
					$answer = axis_load11(13,$i,$count,$num);
				//	break;
				}else{
					$answer = axis_load11(47,$i,$count,$num);
				//	break;
				}
			//axis19,29
			}else if(15*($count-1)*($count-1)-5*($count-1) == 15*$i*$i-6*$i+1-$K||
				15*($count-1)*($count-1)+5*($count-1) == 15*$i*$i-6*$i+1-$K){
				//print("hoge");
				if( axis_load11(19,$i,$count,$num)!=null){
					$answer = axis_load11(19,$i,$count,$num);
				//	break;
				}else{
					$answer = axis_load11(29,$i,$count,$num);
				//	break;
				}
			}
			//print(15*$i*$i+6*$count-9+6*($i-$count)-$K);
			//print("\n");
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}
function axis_load11($axis,$num1,$num2,$Q){
	$answer = array();
	$answer[0] = ($num1-$num2)*30+$axis;
	$answer[1] = $Q/$answer[0];
	if($answer[1] - round($answer[1])==0){
		//print((string)$answer);
		//print(15*($count-1)*($count-1)-25*($count-1));
		//print(" ");
		return $answer;
	//}else{
	//	$answer[0]=($i-$count)*30+$axis;
	//	$answer[1] = $num/$answer[0];
		//print(15*($count-1)*($count-1)-25*($count-1));
		//print(" ");
	//	return $answer;
	}else{
		return null;
	}
}
//print( load11(75311));

?>

