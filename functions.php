<?php
function load7($num){
	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		while(true){
			//axis37,31
			if(15*($count-1)*($count-1)-3*($count-1) == 15*$i*$i-12*$i+2-$K||
				15*($count-1)*($count-1)+3*($count-1) == 15*$i*$i-12*$i+2-$K){
				if( axis_load(37,$i,$count,$num)!=null){
					$answer = axis_load(37,$i,$count,$num);
				}else{
					$answer = axis_load(31,$i,$count,$num);
				}
			//axis19,13
			}else if(15*($count-1)*($count-1)-3*($count-1) == 15*$i*$i-14*$i+4-$K||
				15*($count-1)*($count-1)+3*($count-1) == 15*$i*$i-14*$i+4-$K){
				if( axis_load(19,$i,$count,$num)!=null){
					$answer = axis_load(19,$i,$count,$num);
				}else{
					$answer = axis_load(13,$i,$count,$num);
				}
			//axis17,11
			}else if(15*($count-1)*($count-1)-3*($count-1) == 15*$i*$i-18*$i+5-$K||
				15*($count-1)*($count-1)+3*($count-1) == 15*$i*$i-18*$i+5-$K){
				if( axis_load(17,$i,$count,$num)!=null){
					$answer = axis_load(17,$i,$count,$num);
				}else{
					$answer = axis_load(11,$i,$count,$num);
				}
			//axis23,29
			}else if(15*($count-1)*($count-1)-3*($count-1) == 15*$i*$i-4*$i+1-$K||
				15*($count-1)*($count-1)+3*($count-1) == 15*$i*$i-4*$i+1-$K){
				if( axis_load(19,$i,$count,$num)!=null){
					$answer = axis_load(19,$i,$count,$num);
				}else{
					$answer = axis_load(13,$i,$count,$num);
				}
			//axis7,61
			}else if(15*($count-1)*($count-1)-27*($count-1) == 15*$i*$i-12*$i+1-$K||
				15*($count-1)*($count-1)+27*($count-1) == 15*$i*$i-12*$i+1-$K){
				if( axis_load(19,$i,$count,$num)!=null){
					$answer = axis_load(19,$i,$count,$num);
				}else{
					$answer = axis_load(13,$i,$count,$num);
				}
			}else if(15*($count-1)*($count-1)-3*($count-1) < 15*$i*$i-12*$i+2-$K&&
				15*($count-1)*($count-1)+3*($count-1) < 15*$i*$i-12*$i+2-$K&&
				15*($count-1)*($count-1)-3*($count-1) < 15*$i*$i-14*$i+4-$K&&
				15*($count-1)*($count-1)+3*($count-1) < 15*$i*$i-14*$i+4-$K&&
				15*($count-1)*($count-1)-3*($count-1) < 15*$i*$i-18*$i+5-$K&&
				15*($count-1)*($count-1)+3*($count-1) < 15*$i*$i-18*$i+5-$K&&
				15*($count-1)*($count-1)-3*($count-1) < 15*$i*$i-4*$i+1-$K&&
				15*($count-1)*($count-1)+3*($count-1) < 15*$i*$i-4*$i+1-$K&&
				15*($count-1)*($count-1)-27*($count-1) < 15*$i*$i-12*$i+1-$K&&
				15*($count-1)*($count-1)+27*($count-1) < 15*$i*$i-12*$i+1-$K){
				break 1;
			}
			$i++;
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
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
		while(true){
			//if(15*($count-1)*($count-1)+25*($count-1) == 15*$i*$i+6*$count-9+6*($i-$count)-$K||
				//15*($count-1)*($count-1)-25*($count-1) == 15*$i*$i+6*$count-9+6*($i-$count)-$K){
			//axis11,61
			if(15*($count-1)*($count-1)+25*($count-1) == 15*$i*$i+6*$count-9-$K||
				15*($count-1)*($count-1)-25*($count-1) == 15*$i*$i+6*$count-9-$K){
				if( axis_load(11,$i,$count,$num)!=null){
					$answer = axis_load(11,$i,$count,$num);
				}else{
					$answer = axis_load(61,$i,$count,$num);
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
			}else if(15*($count-1)*($count-1)-5*($count-1) == 15*$i*$i+6*$count+1-$K||
				15*($count-1)*($count-1)+5*($count-1) == 15*$i*$i+6*$count+1-$K){
				if( axis_load(31,$i,$count,$num)!=null){
					$answer = axis_load(31,$i,$count,$num);
				}else{
					$answer = axis_load(41,$i,$count,$num);
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
				if( axis_load(53,$i,$count,$num)!=null){
					$answer = axis_load(53,$i,$count,$num);
				}else{
					$answer = axis_load(7,$i,$count,$num);
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
				if( axis_load(37,$i,$count,$num)!=null){
					$answer = axis_load(37,$i,$count,$num);
				}else{
					$answer = axis_load(23,$i,$count,$num);
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
				if( axis_load(43,$i,$count,$num)!=null){
					$answer = axis_load(43,$i,$count,$num);
				//	break;
				}else{
					$answer = axis_load(17,$i,$count,$num);
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
				if( axis_load(13,$i,$count,$num)!=null){
					$answer = axis_load(13,$i,$count,$num);
				//	break;
				}else{
					$answer = axis_load(47,$i,$count,$num);
				//	break;
				}
			//axis19,29
			}else if(15*($count-1)*($count-1)-5*($count-1) == 15*$i*$i-6*$i+1-$K||
				15*($count-1)*($count-1)+5*($count-1) == 15*$i*$i-6*$i+1-$K){
				//print("hoge");
				if( axis_load(19,$i,$count,$num)!=null){
					$answer = axis_load(19,$i,$count,$num);
				//	break;
				}else{
					$answer = axis_load(29,$i,$count,$num);
				//	break;
				}
			}else if(15*($count-1)*($count-1)+25*($count-1) < 15*$i*$i+6*$i-9-$K&&
				15*($count-1)*($count-1)-25*($count-1) < 15*$i*$i+6*$i-9-$K&&
				15*($count-1)*($count-1)-5*($count-1) < 15*$i*$i+6*$i+1-$K&&
				15*($count-1)*($count-1)+5*($count-1) < 15*$i*$i+6*$i+1-$K&&
				15*($count-1)*($count-1)-23*($count-1) < 15*$i*$i-8-$K&&
				15*($count-1)*($count-1)+23*($count-1) < 15*$i*$i-8-$K&&
				15*($count-1)*($count-1)-7*($count-1) < 15*$i*$i-$K&&
				15*($count-1)*($count-1)+7*($count-1) < 15*$i*$i-$K&&
				15*($count-1)*($count-1)-13*($count-1) < 15*$i*$i-2-$K&&
				15*($count-1)*($count-1)+13*($count-1) < 15*$i*$i-2-$K&&
				15*($count-1)*($count-1)-17*($count-1) < 15*$i*$i-4-$K&&
				15*($count-1)*($count-1)+17*($count-1) < 15*$i*$i-4-$K&&
				15*($count-1)*($count-1)-5*($count-1) < 15*$i*$i-6*$i+1-$K&&
				15*($count-1)*($count-1)+5*($count-1) < 15*$i*$i-6*$i+1-$K){
				break 1;
			}
			//print(15*$i*$i+6*$count-9+6*($i-$count)-$K);
			//print("\n");
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}

function load13($num){
	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		//for($i=$count;$i<=100000;$i++){
		$i=$count;
		while(true){
			//axis43,31
			if(15*($count-1)*($count-1)+6*($count-1) == 15*$i*$i+7*$i+1-$K||
				15*($count-1)*($count-1)-6*($count-1) == 15*$i*$i+7*$i+1-$K){
				if( axis_load(43,$i,$count,$num)!=null){
					$answer = axis_load(43,$i,$count,$num);
				}else{
					$answer = axis_load(31,$i,$count,$num);
				}
			//axis13,61
			}else if(15*($count-1)*($count-1)+24*($count-1) == 15*$i*$i+7*$i+1-$K||
				15*($count-1)*($count-1)-24*($count-1) == 15*$i*$i+7*$i+1-$K){
				if( axis_load(13,$i,$count,$num)!=null){
					$answer = axis_load(13,$i,$count,$num);
				}else{
					$answer = axis_load(61,$i,$count,$num);
				}
			//axis7,19
			}else if(15*($count-1)*($count-1)+6*($count-1) == 15*$i*$i-17*$i+5-$K||
				15*($count-1)*($count-1)-6*($count-1) == 15*$i*$i-17*$i+5-$K){
				if( axis_load(7,$i,$count,$num)!=null){
					$answer = axis_load(7,$i,$count,$num);
				}else{
					$answer = axis_load(19,$i,$count,$num);
				}
			//axis11,23
			}else if(15*($count-1)*($count-1)+6*($count-1) == 15*$i*$i-13*$i+3-$K||
				15*($count-1)*($count-1)-6*($count-1) == 15*$i*$i-13*$i+3-$K){
				if( axis_load(11,$i,$count,$num)!=null){
					$answer = axis_load(11,$i,$count,$num);
				}else{
					$answer = axis_load(23,$i,$count,$num);
				}
			//axis17,29
			}else if(15*($count-1)*($count-1)+6*($count-1) == 15*$i*$i-7*$i+1-$K||
				15*($count-1)*($count-1)-6*($count-1) == 15*$i*$i-7*$i+1-$K){
				if( axis_load(17,$i,$count,$num)!=null){
					$answer = axis_load(17,$i,$count,$num);
				}else{
					$answer = axis_load(29,$i,$count,$num);
				}
			}else if(15*($count-1)*($count-1)+6*($count-1) < 15*$i*$i+7*$i+1-$K&&
				15*($count-1)*($count-1)-6*($count-1) < 15*$i*$i+7*$i+1-$K&&
				15*($count-1)*($count-1)+24*($count-1) < 15*$i*$i+7*$i+1-$K&&
				15*($count-1)*($count-1)-24*($count-1) < 15*$i*$i+7*$i+1-$K&&
				15*($count-1)*($count-1)+6*($count-1) < 15*$i*$i-17*$i+5-$K&&
				15*($count-1)*($count-1)-6*($count-1) < 15*$i*$i-17*$i+5-$K&&
				15*($count-1)*($count-1)+6*($count-1) < 15*$i*$i-13*$i+3-$K&&
				15*($count-1)*($count-1)-6*($count-1) < 15*$i*$i-13*$i+3-$K&&
				15*($count-1)*($count-1)+6*($count-1) < 15*$i*$i-7*$i+1-$K&&
				15*($count-1)*($count-1)-6*($count-1) < 15*$i*$i-7*$i+1-$K){
				break 1;
			}
			print($num."\n");
			$i++;
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}

function load17($num){
	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		//for($i=$count;$i<=100000;$i++){
		$i=$count;
		while(true){
			//axis17,61
			if(15*($count-1)*($count-1)+22*($count-1) == 15*$i*$i+7*$i-4+2*($i-1)-$K||
				15*($count-1)*($count-1)-22*($count-1) == 15*$i*$i+7*$i-4+2*($i-1)-$K){
				if( axis_load(17,$i,$count,$num)!=null){
					$answer = axis_load(17,$i,$count,$num);
				}else{
					$answer = axis_load(61,$i,$count,$num);
				}
			//axis47,31
			}else if(15*($count-1)*($count-1)-8*($count-1) == 15*$i*$i+9*$i+1-$K||
				15*($count-1)*($count-1)+8*($count-1) == 15*$i*$i+9*$i+1-$K){
				if( axis_load(47,$i,$count,$num)!=null){
					$answer = axis_load(47,$i,$count,$num);
				}else{
					$answer = axis_load(31,$i,$count,$num);
				}
			//axis7,11
			}else if(15*($count-1)*($count-1)+2*($count-1) == 15*$i*$i-21*$i+8-$K||
				15*($count-1)*($count-1)-2*($count-1) == 15*$i*$i-21*$i+8-$K){
				if( axis_load(7,$i,$count,$num)!=null){
					$answer = axis_load(7,$i,$count,$num);
				}else{
					$answer = axis_load(11,$i,$count,$num);
				}
			//axis23,19
			}else if(15*($count-1)*($count-1)-2*($count-1) == 15*$i*$i-9*$i+2-$K||
				15*($count-1)*($count-1)+2*($count-1) == 15*$i*$i-9*$i+2-$K){
				if( axis_load(23,$i,$count,$num)!=null){
					$answer = axis_load(23,$i,$count,$num);
				}else{
					$answer = axis_load(19,$i,$count,$num);
				}
			//axis13,29
			}else if(15*($count-1)*($count-1)+8*($count-1) == 15*$i*$i-9*$i+1-$K||
				15*($count-1)*($count-1)-8*($count-1) == 15*$i*$i-9*$i+1-$K){
				if( axis_load(13,$i,$count,$num)!=null){
					$answer = axis_load(13,$i,$count,$num);
				}else{
					$answer = axis_load(29,$i,$count,$num);
				}
			}else if(15*($count-1)*($count-1)+22*($count-1) < 15*$i*$i+7*$i-4+2*($i-2)-$K&&
				15*($count-1)*($count-1)-22*($count-1) < 15*$i*$i+7*$i-4+2*($i-1)-$K&&
				15*($count-1)*($count-1)-8*($count-1) < 15*$i*$i+9*$i+1-$K&&
				15*($count-1)*($count-1)+8*($count-1) < 15*$i*$i+9*$i+1-$K&&
				15*($count-1)*($count-1)+2*($count-1) < 15*$i*$i-21*$i+8-$K&&
				15*($count-1)*($count-1)-2*($count-1) < 15*$i*$i-21*$i+8-$K&&
				15*($count-1)*($count-1)-2*($count-1) < 15*$i*$i-9*$i+2-$K&&
				15*($count-1)*($count-1)+2*($count-1) < 15*$i*$i-9*$i+2-$K&&
				15*($count-1)*($count-1)+8*($count-1) < 15*$i*$i-9*$i+1-$K&&
				15*($count-1)*($count-1)-8*($count-1) < 15*$i*$i-9*$i+1-$K){
				break 1;
			}
			$i++;
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}

function load19($num){
	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		//for($i=$count;$i<=100000;$i++){
		$i=$count;
		while(true){
			//axis 29,11
			if(15*($count-1)*($count-1)-9*($count-1) == 15*$i*$i-10*$i+1-$K||
				15*($count-1)*($count-1)+9*($count-1) == 15*$i*$i-10*$i+1-$K){
				if( axis_load(29,$i,$count,$num)!=null){
					$answer = axis_load(29,$i,$count,$num);
				}else{
					$answer = axis_load(11,$i,$count,$num);
				}
			//axis31,49
			}else if(15*($count-1)*($count-1)+9*($count-1) == 15*$i*$i+10*$i+1-$K||
				15*($count-1)*($count-1)-9*($count-1) == 15*$i*$i+10*$i+1-$K){
				if( axis_load(31,$i,$count,$num)!=null){
					$answer = axis_load(31,$i,$count,$num);
				}else{
					$answer = axis_load(49,$i,$count,$num);
				}
			//axis37,7
			}else if(15*($count-1)*($count-1)-15*($count-1) == 15*$i*$i-8*$i-2-$K||
				15*($count-1)*($count-1)+15*($count-1) == 15*$i*$i-8*$i-2-$K){
				if( axis_load(37,$i,$count,$num)!=null){
					$answer = axis_load(37,$i,$count,$num);
				}else{
					$answer = axis_load(7,$i,$count,$num);
				}
			//axis23,53
			}else if(15*($count-1)*($count-1)+15*($count-1) == 15*$i*$i+8*$i-2-$K||
				15*($count-1)*($count-1)-15*($count-1) == 15*$i*$i+8*$i-2-$K){
				if( axis_load(23,$i,$count,$num)!=null){
					$answer = axis_load(23,$i,$count,$num);
				}else{
					$answer = axis_load(53,$i,$count,$num);
				}
			//axis47,17
			}else if(15*($count-1)*($count-1)-15*($count-1) == 15*$i*$i+2*$i-3-$K||
				15*($count-1)*($count-1)+15*($count-1) == 15*$i*$i+2*$i-3-$K){
				if( axis_load(47,$i,$count,$num)!=null){
					$answer = axis_load(47,$i,$count,$num);
				}else{
					$answer = axis_load(17,$i,$count,$num);
				}
			//axis13,43
			}else if(15*($count-1)*($count-1)+15*($count-1) == 15*$i*$i-2*$i-3-$K||
				15*($count-1)*($count-1)-15*($count-1) == 15*$i*$i-2*$i-3-$K){
				if( axis_load(13,$i,$count,$num)!=null){
					$answer = axis_load(13,$i,$count,$num);
				}else{
					$answer = axis_load(43,$i,$count,$num);
				}
			//axis61,19
			}else if(15*($count-1)*($count-1)-21*($count-1) == 15*$i*$i+10*$i-5-$K||
				15*($count-1)*($count-1)+21*($count-1) == 15*$i*$i+10*$i-5-$K){
				if( axis_load(61,$i,$count,$num)!=null){
					$answer = axis_load(19,$i,$count,$num);
				}else{
					$answer = axis_load(43,$i,$count,$num);
				}
			}else if(15*($count-1)*($count-1)-9*($count-1) < 15*$i*$i-10*$i+1-$K&&
				15*($count-1)*($count-1)+9*($count-1) < 15*$i*$i-10*$i+1-$K&&
				15*($count-1)*($count-1)+9*($count-1) < 15*$i*$i+10*$i+1-$K&&
				15*($count-1)*($count-1)-9*($count-1) < 15*$i*$i+10*$i+1-$K&&
				15*($count-1)*($count-1)-15*($count-1) < 15*$i*$i-8*$i-2-$K&&
				15*($count-1)*($count-1)+15*($count-1) < 15*$i*$i-8*$i-2-$K&&
				15*($count-1)*($count-1)-15*($count-1) < 15*$i*$i+2*$i-3-$K&&
				15*($count-1)*($count-1)+15*($count-1) < 15*$i*$i+2*$i-3-$K&&
				15*($count-1)*($count-1)+15*($count-1) < 15*$i*$i-2*$i-3-$K&&
				15*($count-1)*($count-1)-15*($count-1) < 15*$i*$i-2*$i-3-$K&&
				15*($count-1)*($count-1)-21*($count-1) < 15*$i*$i+10*$i-5-$K&&
				15*($count-1)*($count-1)+21*($count-1) < 15*$i*$i+10*$i-5-$K){
				break 1;
			}
			$i++;
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}

function load23($num){
	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		//for($i=$count;$i<=100000;$i++){
		$i=$count;
		while(true){
			//axis23,61
			if(15*($count-1)*($count-1)+19*($count-1) == 15*$i*$i+12*$i-3-$K||
				15*($count-1)*($count-1)-19*($count-1) == 15*$i*$i+12*$i-3-$K){
				if( axis_load(23,$i,$count,$num)!=null){
					$answer = axis_load(23,$i,$count,$num);
				}else{
					$answer = axis_load(61,$i,$count,$num);
				}
			//axis31,53
			}else if(15*($count-1)*($count-1)+11*($count-1) == 15*$i*$i+12*$i+1-$K||
				15*($count-1)*($count-1)-11*($count-1) == 15*$i*$i+12*$i+1-$K){
				if( axis_load(31,$i,$count,$num)!=null){
					$answer = axis_load(31,$i,$count,$num);
				}else{
					$answer = axis_load(53,$i,$count,$num);
				}
			//axis17,19
			}else if(15*($count-1)*($count-1)+($count-1) == 15*$i*$i-12*$i+3-$K||
				15*($count-1)*($count-1)-($count-1) == 15*$i*$i-12*$i+3-$K){
				if( axis_load(17,$i,$count,$num)!=null){
					$answer = axis_load(17,$i,$count,$num);
				}else{
					$answer = axis_load(19,$i,$count,$num);
				}
			//axis11,13
			}else if(15*($count-1)*($count-1)+($count-1) == 15*$i*$i-18*$i+6-$K||
				15*($count-1)*($count-1)-($count-1) == 15*$i*$i-18*$i+6-$K){
				if( axis_load(11,$i,$count,$num)!=null){
					$answer = axis_load(11,$i,$count,$num);
				}else{
					$answer = axis_load(13,$i,$count,$num);
				}
			//axis7,29
			}else if(15*($count-1)*($count-1)+11*($count-1) == 15*$i*$i-12*$i+1-$K||
				15*($count-1)*($count-1)-11*($count-1) == 15*$i*$i-12*$i+1-$K){
				if( axis_load(7,$i,$count,$num)!=null){
					$answer = axis_load(7,$i,$count,$num);
				}else{
					$answer = axis_load(29,$i,$count,$num);
				}
			}else if(15*($count-1)*($count-1)+19*($count-1) < 15*$i*$i+12*$i-3-$K&&
				15*($count-1)*($count-1)-19*($count-1) < 15*$i*$i+12*$i-3-$K&&
				15*($count-1)*($count-1)+11*($count-1) < 15*$i*$i+12*$i+1-$K&&
				15*($count-1)*($count-1)-11*($count-1) < 15*$i*$i+12*$i+1-$K&&
				15*($count-1)*($count-1)+($count-1) < 15*$i*$i-12*$i+3-$K&&
				15*($count-1)*($count-1)-($count-1) < 15*$i*$i-12*$i+3-$K&&
				15*($count-1)*($count-1)+($count-1) < 15*$i*$i-18*$i+6-$K&&
				15*($count-1)*($count-1)-($count-1) < 15*$i*$i-18*$i+6-$K&&
				15*($count-1)*($count-1)+11*($count-1) < 15*$i*$i-12*$i+1-$K&&
				15*($count-1)*($count-1)-11*($count-1) < 15*$i*$i-12*$i+1-$K){
					break 1;
			}
			$i++;
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}

function load29($num){
	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		//for($i=$count;$i<=100000;$i++){
		$i=$count;
		while(true){
			//axis37,17
			if(15*($count-1)*($count-1)-10*($count-1) == 15*$i*$i-3*$i-1-$K||
				15*($count-1)*($count-1)+10*($count-1) == 15*$i*$i-3*$i-1-$K){
				if( axis_load(37,$i,$count,$num)!=null){
					$answer = axis_load(37,$i,$count,$num);
				}else{
					$answer = axis_load(17,$i,$count,$num);
				}
			//axis19,11
			}else if(15*($count-1)*($count-1)-4*($count-1) == 15*$i*$i-15*$i+4-$K||
				15*($count-1)*($count-1)+4*($count-1) == 15*$i*$i-15*$i+4-$K){
				if( axis_load(19,$i,$count,$num)!=null){
					$answer = axis_load(19,$i,$count,$num);
				}else{
					$answer = axis_load(11,$i,$count,$num);
				}
			//axis59,31
			}else if(15*($count-1)*($count-1)-14*($count-1) == 15*$i*$i+15*$i+1-$K||
				15*($count-1)*($count-1)+14*($count-1) == 15*$i*$i+15*$i+1-$K){
				if( axis_load(59,$i,$count,$num)!=null){
					$answer = axis_load(59,$i,$count,$num);
				}else{
					$answer = axis_load(31,$i,$count,$num);
				}
			//axis47,7
			}else if(15*($count-1)*($count-1)-20*($count-1) == 15*$i*$i-3*$i-6-$K||
				15*($count-1)*($count-1)+20*($count-1) == 15*$i*$i-3*$i-6-$K){
				if( axis_load(47,$i,$count,$num)!=null){
					$answer = axis_load(47,$i,$count,$num);
				}else{
					$answer = axis_load(7,$i,$count,$num);
				}
			//axis53,13
			}else if(15*($count-1)*($count-1)-20*($count-1) == 15*$i*$i+3*$i-6-$K||
				15*($count-1)*($count-1)+20*($count-1) == 15*$i*$i+3*$i-6-$K){
				if( axis_load(53,$i,$count,$num)!=null){
					$answer = axis_load(53,$i,$count,$num);
				}else{
					$answer = axis_load(13,$i,$count,$num);
				}
			//axis43,23
			}else if(15*($count-1)*($count-1)-10*($count-1) == 15*$i*$i+3*$i-1-$K||
				15*($count-1)*($count-1)+10*($count-1) == 15*$i*$i+3*$i-1-$K){
				if( axis_load(43,$i,$count,$num)!=null){
					$answer = axis_load(43,$i,$count,$num);
				}else{
					$answer = axis_load(23,$i,$count,$num);
				}
			//axis29,61
			}else if(15*($count-1)*($count-1)-16*($count-1) == 15*$i*$i+15*$i-$K||
				15*($count-1)*($count-1)+16*($count-1) == 15*$i*$i+15*$i-$K){
				if( axis_load(29,$i,$count,$num)!=null){
					$answer = axis_load(29,$i,$count,$num);
				}else{
					$answer = axis_load(61,$i,$count,$num);
				}
				
			}else if(15*($count-1)*($count-1)-10*($count-1) < 15*$i*$i-3*$i-1-$K&&
				15*($count-1)*($count-1)+10*($count-1) < 15*$i*$i-3*$i-1-$K&&
				15*($count-1)*($count-1)-4*($count-1) < 15*$i*$i-15*$i+4-$K&&
				15*($count-1)*($count-1)+4*($count-1) < 15*$i*$i-15*$i+4-$K&&
				15*($count-1)*($count-1)-14*($count-1) < 15*$i*$i+15*$i+1-$K&&
				15*($count-1)*($count-1)+14*($count-1) < 15*$i*$i+15*$i+1-$K&&
				15*($count-1)*($count-1)-20*($count-1) < 15*$i*$i-3*$i-6-$K&&
				15*($count-1)*($count-1)+20*($count-1) < 15*$i*$i-3*$i-6-$K&&
				15*($count-1)*($count-1)-20*($count-1) < 15*$i*$i+3*$i-6-$K&&
				15*($count-1)*($count-1)+20*($count-1) < 15*$i*$i+3*$i-6-$K&&
				15*($count-1)*($count-1)-10*($count-1) < 15*$i*$i+3*$i-1-$K&&
				15*($count-1)*($count-1)+10*($count-1) < 15*$i*$i+3*$i-1-$K&&
				15*($count-1)*($count-1)-16*($count-1) < 15*$i*$i+15*$i-$K&&
				15*($count-1)*($count-1)+16*($count-1) < 15*$i*$i+15*$i-$K){
				break 1;
			}
			$i++;
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}

function load31($num){

	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		//for($i=$count;$i<=100000;$i++){
		$i=$count;
		while(true){
			//axis41,11
			if(15*($count-1)*($count-1)-15*($count-1) == 15*$i*$i-4*$i-3-$K||
				15*($count-1)*($count-1)+15*($count-1) == 15*$i*$i-4*$i-3-$K){
				if( axis_load(41,$i,$count,$num)!=null){
					$answer = axis_load(41,$i,$count,$num);
				}else{
					$answer = axis_load(11,$i,$count,$num);
				}
			//axis13,7
			}else if(15*($count-1)*($count-1)-3*($count-1) == 15*$i*$i-20*$i+3-$K||
				15*($count-1)*($count-1)+3*($count-1) == 15*$i*$i-20*$i+3-$K){
				if( axis_load(13,$i,$count,$num)!=null){
					$answer = axis_load(13,$i,$count,$num);
				}else{
					$answer = axis_load(7,$i,$count,$num);
				}
			//axis23,17
			}else if(15*($count-1)*($count-1)-2*($count-1) == 15*$i*$i-10*$i-3-$K||
				15*($count-1)*($count-1)+2*($count-1) == 15*$i*$i-10*$i-3-$K){
				if( axis_load(23,$i,$count,$num)!=null){
					$answer = axis_load(23,$i,$count,$num);
				}else{
					$answer = axis_load(17,$i,$count,$num);
				}
			//axis49,19
			}else if(15*($count-1)*($count-1)-15*($count-1) == 15*$i*$i+4*$i-3-$K||
				15*($count-1)*($count-1)+15*($count-1) == 15*$i*$i+4*$i-3-$K){
				if( axis_load(49,$i,$count,$num)!=null){
					$answer = axis_load(49,$i,$count,$num);
				}else{
					$answer = axis_load(19,$i,$count,$num);
				}
			//axis59,29
			}else if(15*($count-1)*($count-1)-15*($count-1) == 15*$i*$i+14*$i-$K||
				15*($count-1)*($count-1)+15*($count-1) == 15*$i*$i+14*$i-$K){
				if( axis_load(59,$i,$count,$num)!=null){
					$answer = axis_load(59,$i,$count,$num);
				}else{
					$answer = axis_load(29,$i,$count,$num);
				}
			//axis31,61
			}else if(15*($count-1)*($count-1)-15*($count-1) == 15*$i*$i+16*$i+1-$K||
				15*($count-1)*($count-1)+15*($count-1) == 15*$i*$i+16*$i+1-$K){
				if( axis_load(31,$i,$count,$num)!=null){
					$answer = axis_load(31,$i,$count,$num);
				}else{
					$answer = axis_load(61,$i,$count,$num);
				}
			}else if(15*($count-1)*($count-1)-15*($count-1) < 15*$i*$i-4*$i-3-$K&&
				15*($count-1)*($count-1)+15*($count-1) < 15*$i*$i-4*$i-3-$K&&
				15*($count-1)*($count-1)-3*($count-1) < 15*$i*$i-20*$i+3-$K&&
				15*($count-1)*($count-1)+3*($count-1) < 15*$i*$i-20*$i+3-$K&&
				15*($count-1)*($count-1)-2*($count-1) < 15*$i*$i-10*$i-3-$K&&
				15*($count-1)*($count-1)+2*($count-1) < 15*$i*$i-10*$i-3-$K&&
				15*($count-1)*($count-1)-15*($count-1) < 15*$i*$i+4*$i-3-$K&&
				15*($count-1)*($count-1)+15*($count-1) < 15*$i*$i+4*$i-3-$K&&
				15*($count-1)*($count-1)-15*($count-1) < 15*$i*$i+14*$i-$K&&
				15*($count-1)*($count-1)+15*($count-1) < 15*$i*$i+14*$i-$K&&
				15*($count-1)*($count-1)-15*($count-1) < 15*$i*$i+16*$i+1-$K&&
				15*($count-1)*($count-1)+15*($count-1) < 15*$i*$i+16*$i+1-$K){
				break 1;
			}
			$i++;
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}

function load37($num){
	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		//for($i=$count;$i<=100000;$i++){
		$i=$count;
		while(true){
			//axis47,11
			if(15*($count-1)*($count-1)-18*($count-1) == 15*$i*$i-$i-5-$K||
				15*($count-1)*($count-1)+18*($count-1) == 15*$i*$i-$i-5-$K){
				if( axis_load(47,$i,$count,$num)!=null){
					$answer = axis_load(47,$i,$count,$num);
				}else{
					$answer = axis_load(11,$i,$count,$num);
				}
			//axis41,17
			}else if(15*($count-1)*($count-1)-12*($count-1) == 15*$i*$i-$i-2-$K||
				15*($count-1)*($count-1)+12*($count-1) == 15*$i*$i-$i-2-$K){
				if( axis_load(41,$i,$count,$num)!=null){
					$answer = axis_load(41,$i,$count,$num);
				}else{
					$answer = axis_load(17,$i,$count,$num);
				}
			//axis59,23
			}else if(15*($count-1)*($count-1)-18*($count-1) == 15*$i*$i+11*$i-3-$K||
				15*($count-1)*($count-1)+18*($count-1) == 15*$i*$i+11*$i-3-$K){
				if( axis_load(59,$i,$count,$num)!=null){
					$answer = axis_load(59,$i,$count,$num);
				}else{
					$answer = axis_load(23,$i,$count,$num);
				}
			//axis43,19
			}else if(15*($count-1)*($count-1)-12*($count-1) == 15*$i*$i+$i-2-$K||
				15*($count-1)*($count-1)+12*($count-1) == 15*$i*$i+$i-2-$K){
				if( axis_load(43,$i,$count,$num)!=null){
					$answer = axis_load(43,$i,$count,$num);
				}else{
					$answer = axis_load(19,$i,$count,$num);
				}
			//axis49,13
			}else if(15*($count-1)*($count-1)-18*($count-1) == 15*$i*$i+$i-6-$K||
				15*($count-1)*($count-1)+18*($count-1) == 15*$i*$i+$i-6-$K){
				if( axis_load(49,$i,$count,$num)!=null){
					$answer = axis_load(49,$i,$count,$num);
				}else{
					$answer = axis_load(13,$i,$count,$num);
				}
			//axis53,29
			}else if(15*($count-1)*($count-1)-12*($count-1) == 15*$i*$i+11*$i-$K||
				15*($count-1)*($count-1)+12*($count-1) == 15*$i*$i+11*$i-$K){
				if( axis_load(53,$i,$count,$num)!=null){
					$answer = axis_load(53,$i,$count,$num);
				}else{
					$answer = axis_load(29,$i,$count,$num);
				}
			//axis7,31
			}else if(15*($count-1)*($count-1)-27*($count-1) == 15*$i*$i-12*$i+2-$K||
				15*($count-1)*($count-1)+27*($count-1) == 15*$i*$i-12*$i+2-$K){
				if( axis_load(7,$i,$count,$num)!=null){
					$answer = axis_load(7,$i,$count,$num);
				}else{
					$answer = axis_load(31,$i,$count,$num);
				}
				
			}else if(15*($count-1)*($count-1)-18*($count-1) < 15*$i*$i-$i-5-$K&&
				15*($count-1)*($count-1)+18*($count-1) < 15*$i*$i-$i-5-$K&&
				15*($count-1)*($count-1)-12*($count-1) < 15*$i*$i-$i-2-$K&&
				15*($count-1)*($count-1)+12*($count-1) < 15*$i*$i-$i-2-$K&&
				15*($count-1)*($count-1)-18*($count-1) < 15*$i*$i+11*$i-3-$K&&
				15*($count-1)*($count-1)+18*($count-1) < 15*$i*$i+11*$i-3-$K&&
				15*($count-1)*($count-1)-12*($count-1) < 15*$i*$i+$i-2-$K&&
				15*($count-1)*($count-1)+12*($count-1) < 15*$i*$i+$i-2-$K&&
				15*($count-1)*($count-1)-18*($count-1) < 15*$i*$i+$i-6-$K&&
				15*($count-1)*($count-1)+18*($count-1) < 15*$i*$i+$i-6-$K&&
				15*($count-1)*($count-1)-12*($count-1) < 15*$i*$i+11*$i-$K&&
				15*($count-1)*($count-1)+12*($count-1) < 15*$i*$i+11*$i-$K&&
				15*($count-1)*($count-1)-27*($count-1) < 15*$i*$i-12*$i+2-$K&&
				15*($count-1)*($count-1)+27*($count-1) < 15*$i*$i-12*$i+2-$K){
				break 1;
			}
			$i++;
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}

function load41($num){
	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		//for($i=$count;$i<=100000;$i++){
		$i=$count;
		while(true){
			//axis17,13
			if(15*($count-1)*($count-1)-2*($count-1) == 15*$i*$i-15*$i+4-$K||
				15*($count-1)*($count-1)+2*($count-1) == 15*$i*$i-15*$i+4-$K){
				if( axis_load(17,$i,$count,$num)!=null){
					$answer = axis_load(17,$i,$count,$num);
				}else{
					$answer = axis_load(13,$i,$count,$num);
				}
			//axis49,29
			}else if(15*($count-1)*($count-1)-10*($count-1) == 15*$i*$i+9*$i-$K||
				15*($count-1)*($count-1)+10*($count-1) == 15*$i*$i+9*$i-$K){
				if( axis_load(49,$i,$count,$num)!=null){
					$answer = axis_load(49,$i,$count,$num);
				}else{
					$answer = axis_load(29,$i,$count,$num);
				}
			//axis59,19
			}else if(15*($count-1)*($count-1)-20*($count-1) == 15*$i*$i+9*$i-5-$K||
				15*($count-1)*($count-1)+20*($count-1) == 15*$i*$i+9*$i-5-$K){
				if( axis_load(49,$i,$count,$num)!=null){
					$answer = axis_load(49,$i,$count,$num);
				}else{
					$answer = axis_load(29,$i,$count,$num);
				}
			//axis23,7
			}else if(15*($count-1)*($count-1)-8*($count-1) == 15*$i*$i-15*$i+3-$K||
				15*($count-1)*($count-1)+8*($count-1) == 15*$i*$i-15*$i+3-$K){
				if( axis_load(23,$i,$count,$num)!=null){
					$answer = axis_load(23,$i,$count,$num);
				}else{
					$answer = axis_load(7,$i,$count,$num);
				}
			//axis31,11
			}else if(15*($count-1)*($count-1)-9*($count-1) == 15*$i*$i+10*$i-20-$K||
				15*($count-1)*($count-1)+9*($count-1) == 15*$i*$i+10*$i-20-$K){
				if( axis_load(31,$i,$count,$num)!=null){
					$answer = axis_load(31,$i,$count,$num);
				}else{
					$answer = axis_load(11,$i,$count,$num);
				}
				
			}else if(15*($count-1)*($count-1)-2*($count-1) < 15*$i*$i-15*$i+4-$K&&
				15*($count-1)*($count-1)+2*($count-1) < 15*$i*$i-15*$i+4-$K&&
				15*($count-1)*($count-1)-10*($count-1) < 15*$i*$i+9*$i-$K&&
				15*($count-1)*($count-1)+10*($count-1) < 15*$i*$i+9*$i-$K&&
				15*($count-1)*($count-1)-20*($count-1) < 15*$i*$i+9*$i-5-$K&&
				15*($count-1)*($count-1)+20*($count-1) < 15*$i*$i+9*$i-5-$K&&
				15*($count-1)*($count-1)-8*($count-1) < 15*$i*$i-15*$i+3-$K&&
				15*($count-1)*($count-1)+8*($count-1) < 15*$i*$i-15*$i+3-$K&&
				15*($count-1)*($count-1)-9*($count-1) < 15*$i*$i+10*$i-20-$K&&
				15*($count-1)*($count-1)+9*($count-1) < 15*$i*$i+10*$i-20-$K){
				break 1;
			}
			$i++;
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}

function load43($num){

	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		//for($i=$count;$i<=100000;$i++){
		$i=$count;
		while(true){
			//axis49,7
			if(15*($count-1)*($count-1)-17*($count-1) == 15*$i*$i-2*$i-7-$K||
				15*($count-1)*($count-1)+17*($count-1) == 15*$i*$i-2*$i-7-$K){
				if( axis_load(49,$i,$count,$num)!=null){
					$answer = axis_load(49,$i,$count,$num);
				}else{
					$answer = axis_load(7,$i,$count,$num);
				}
			//axis53,11
			}else if(15*($count-1)*($count-1)-21*($count-1) == 15*$i*$i+2*$i-7-$K||
				15*($count-1)*($count-1)+21*($count-1) == 15*$i*$i+2*$i-7-$K){
				if( axis_load(53,$i,$count,$num)!=null){
					$answer = axis_load(53,$i,$count,$num);
				}else{
					$answer = axis_load(11,$i,$count,$num);
				}
			//axis59,17
			}else if(15*($count-1)*($count-1)-21*($count-1) == 15*$i*$i+8*$i-6-$K||
				15*($count-1)*($count-1)+21*($count-1) == 15*$i*$i+8*$i-6-$K){
				if( axis_load(59,$i,$count,$num)!=null){
					$answer = axis_load(59,$i,$count,$num);
				}else{
					$answer = axis_load(17,$i,$count,$num);
				}
			//axis41,23
			}else if(15*($count-1)*($count-1)-9*($count-1) == 15*$i*$i+2*$i-1-$K||
				15*($count-1)*($count-1)+9*($count-1) == 15*$i*$i+2*$i-1-$K){
				if( axis_load(41,$i,$count,$num)!=null){
					$answer = axis_load(41,$i,$count,$num);
				}else{
					$answer = axis_load(23,$i,$count,$num);
				}
			//axis37,19
			}else if(15*($count-1)*($count-1)-9*($count-1) == 15*$i*$i-2*$i-1-$K||
				15*($count-1)*($count-1)+9*($count-1) == 15*$i*$i-2*$i-1-$K){
				if( axis_load(37,$i,$count,$num)!=null){
					$answer = axis_load(37,$i,$count,$num);
				}else{
					$answer = axis_load(19,$i,$count,$num);
				}
			//axis47,29
			}else if(15*($count-1)*($count-1)-9*($count-1) == 15*$i*$i+8*$i-$K||
				15*($count-1)*($count-1)+9*($count-1) == 15*$i*$i+8*$i-$K){
				if( axis_load(47,$i,$count,$num)!=null){
					$answer = axis_load(47,$i,$count,$num);
				}else{
					$answer = axis_load(29,$i,$count,$num);
				}
			//axis31,13
			}else if(15*($count-1)*($count-1)-9*($count-1) == 15*$i*$i-8*$i-$K||
				15*($count-1)*($count-1)+9*($count-1) == 15*$i*$i-8*$i-$K){
				if( axis_load(7,$i,$count,$num)!=null){
					$answer = axis_load(31,$i,$count,$num);
				}else{
					$answer = axis_load(13,$i,$count,$num);
				}
				
			}else if(15*($count-1)*($count-1)-17*($count-1) < 15*$i*$i-2*$i-7-$K&&
				15*($count-1)*($count-1)+17*($count-1) < 15*$i*$i-2*$i-7-$K&&
				15*($count-1)*($count-1)-21*($count-1) < 15*$i*$i+2*$i-7-$K&&
				15*($count-1)*($count-1)+21*($count-1) < 15*$i*$i+2*$i-7-$K&&
				15*($count-1)*($count-1)-21*($count-1) < 15*$i*$i+8*$i-6-$K&&
				15*($count-1)*($count-1)+21*($count-1) < 15*$i*$i+8*$i-6-$K&&
				15*($count-1)*($count-1)-9*($count-1) < 15*$i*$i+2*$i-1-$K&&
				15*($count-1)*($count-1)+9*($count-1) < 15*$i*$i+2*$i-1-$K&&
				15*($count-1)*($count-1)-9*($count-1) < 15*$i*$i-2*$i-1-$K&&
				15*($count-1)*($count-1)+9*($count-1) < 15*$i*$i-2*$i-1-$K&&
				15*($count-1)*($count-1)-9*($count-1) < 15*$i*$i+8*$i-$K&&
				15*($count-1)*($count-1)+9*($count-1) < 15*$i*$i+8*$i-$K&&
				15*($count-1)*($count-1)-9*($count-1) < 15*$i*$i-8*$i-$K&&
				15*($count-1)*($count-1)+9*($count-1) < 15*$i*$i-8*$i-$K){
				break 1;
			}
			$i++;
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}

function load47($num){

	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		//for($i=$count;$i<=100000;$i++){
		$i=$count;
		while(true){
			//axis41,7
			if(15*($count-1)*($count-1)-17*($count-1) == 15*$i*$i-6*$i-4-$K||
				15*($count-1)*($count-1)+17*($count-1) == 15*$i*$i-6*$i-4-$K){
				if( axis_load(41,$i,$count,$num)!=null){
					$answer = axis_load(41,$i,$count,$num);
				}else{
					$answer = axis_load(7,$i,$count,$num);
				}
			//axis37,11
			}else if(15*($count-1)*($count-1)-13*($count-1) == 15*$i*$i-6*$i-2-$K||
				15*($count-1)*($count-1)+13*($count-1) == 15*$i*$i-6*$i-2-$K){
				if( axis_load(37,$i,$count,$num)!=null){
					$answer = axis_load(37,$i,$count,$num);
				}else{
					$answer = axis_load(11,$i,$count,$num);
				}
			//axis59,13
			}else if(15*($count-1)*($count-1)-23*($count-1) == 15*$i*$i+6*$i-8-$K||
				15*($count-1)*($count-1)+23*($count-1) == 15*$i*$i+6*$i-8-$K){
				if( axis_load(59,$i,$count,$num)!=null){
					$answer = axis_load(59,$i,$count,$num);
				}else{
					$answer = axis_load(13,$i,$count,$num);
				}
			//axis49,23
			}else if(15*($count-1)*($count-1)-13*($count-1) == 15*$i*$i-4*$i+1-$K||
				15*($count-1)*($count-1)+13*($count-1) == 15*$i*$i-4*$i+1-$K){
				if( axis_load(49,$i,$count,$num)!=null){
					$answer = axis_load(49,$i,$count,$num);
				}else{
				$answer = axis_load(23,$i,$count,$num);
				}
			//axis53,19
			}else if(15*($count-1)*($count-1)-17*($count-1) == 15*$i*$i+6*$i-4-$K||
				15*($count-1)*($count-1)+17*($count-1) == 15*$i*$i+16*$i-4-$K){
				if( axis_load(53,$i,$count,$num)!=null){
					$answer = axis_load(53,$i,$count,$num);
				}else{
					$answer = axis_load(19,$i,$count,$num);
				}
			//axis43,29
			}else if(15*($count-1)*($count-1)-6*($count-1) == 15*$i*$i+6*$i-$K||
				15*($count-1)*($count-1)+6*($count-1) == 15*$i*$i+6*$i-$K){
				if( axis_load(43,$i,$count,$num)!=null){
					$answer = axis_load(43,$i,$count,$num);
				}else{
					$answer = axis_load(29,$i,$count,$num);
				}
			//axis31,17
			}else if(15*($count-1)*($count-1)-6*($count-1) == 15*$i*$i-6*$i-2-$K||
				15*($count-1)*($count-1)+6*($count-1) == 15*$i*$i-6*$i-2-$K){
				if( axis_load(31,$i,$count,$num)!=null){
					$answer = axis_load(31,$i,$count,$num);
				}else{
					$answer = axis_load(17,$i,$count,$num);
				}
				
			}else if(15*($count-1)*($count-1)-17*($count-1) < 15*$i*$i-6*$i-4-$K&&
				15*($count-1)*($count-1)+17*($count-1) < 15*$i*$i-6*$i-4-$k&&
				15*($count-1)*($count-1)-13*($count-1) < 15*$i*$i-6*$i-2-$K&&
				15*($count-1)*($count-1)+13*($count-1) < 15*$i*$i-6*$i-2-$K&&
				15*($count-1)*($count-1)-23*($count-1) < 15*$i*$i+6*$i-8-$K&&
				15*($count-1)*($count-1)+23*($count-1) < 15*$i*$i+6*$i-8-$K&&
				15*($count-1)*($count-1)-13*($count-1) < 15*$i*$i-4*$i+1-$K&&
				15*($count-1)*($count-1)+13*($count-1) < 15*$i*$i-4*$i+1-$K&&
				15*($count-1)*($count-1)-17*($count-1) < 15*$i*$i+6*$i-4-$K&&
				15*($count-1)*($count-1)+17*($count-1) < 15*$i*$i+16*$i-4-$K&&
				15*($count-1)*($count-1)-6*($count-1) < 15*$i*$i+6*$i-$K&&
				15*($count-1)*($count-1)+6*($count-1) < 15*$i*$i+6*$i-$K&&
				15*($count-1)*($count-1)-6*($count-1) < 15*$i*$i-6*$i-2-$K&&
				15*($count-1)*($count-1)+6*($count-1) < 15*$i*$i-6*$i-2-$K){
				break 1;
			}
			$i++;
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}

function load49($num){

	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		//for($i=$count;$i<=100000;$i++){
		$i=$count;
		while(true){
			//axis29,41
			if(15*($count-1)*($count-1)-6*($count-1) == 15*$i*$i+5*$i-$K||
				15*($count-1)*($count-1)+6*($count-1) == 15*$i*$i+5*$i-$K){
				if( axis_load(29,$i,$count,$num)!=null){
					$answer = axis_load(29,$i,$count,$num);
				}else{
					$answer = axis_load(7,$i,$count,$num);
				}
			//axis19,31
			}else if(15*($count-1)*($count-1)-6*($count-1) == 15*$i*$i-5*$i-$K||
				15*($count-1)*($count-1)+6*($count-1) == 15*$i*$i-5*$i-$K){
				if( axis_load(19,$i,$count,$num)!=null){
					$answer = axis_load(19,$i,$count,$num);
				}else{
					$answer = axis_load(31,$i,$count,$num);
				}
			//axis11,59
			}else if(15*($count-1)*($count-1)-6*($count-1) == 15*$i*$i-18*$i+5-$K||
				15*($count-1)*($count-1)+6*($count-1) == 15*$i*$i-18*$i+5-$K){
				if( axis_load(11,$i,$count,$num)!=null){
					$answer = axis_load(11,$i,$count,$num);
				}else{
					$answer = axis_load(59,$i,$count,$num);
				}
			//axis7
			}else if(15*($count-1)*($count-1) == 15*$i*$i-23*$i+9-$K){
					$answer = axis_load(7,$i,$count,$num);
			//axis13
			}else if(15*($count-1)*($count-1) == 15*$i*$i-17*$i+5-$K){
					$answer = axis_load(13,$i,$count,$num);
			//axis17
			}else if(15*($count-1)*($count-1) == 15*$i*$i-13*$i+3-$K){
					$answer = axis_load(17,$i,$count,$num);
			//axis23
			}else if(15*($count-1)*($count-1) == 15*$i*$i-7*$i+1-$K){
					$answer = axis_load(23,$i,$count,$num);
					
			}else if(15*($count-1)*($count-1)-6*($count-1) < 15*$i*$i+5*$i-$K&&
				15*($count-1)*($count-1)+6*($count-1) < 15*$i*$i+5*$i-$K&&
				15*($count-1)*($count-1)-6*($count-1) < 15*$i*$i-5*$i-$K&&
				15*($count-1)*($count-1)+6*($count-1) < 15*$i*$i-5*$i-$K&&
				15*($count-1)*($count-1)-6*($count-1) < 15*$i*$i-18*$i+5-$K&&
				15*($count-1)*($count-1)+6*($count-1) < 15*$i*$i-18*$i+5-$K&&
				15*($count-1)*($count-1) < 15*$i*$i-23*$i+9-$K&&
				15*($count-1)*($count-1) < 15*$i*$i-17*$i+5-$K&&
				15*($count-1)*($count-1) < 15*$i*$i-13*$i+3-$K&&
				15*($count-1)*($count-1) < 15*$i*$i-7*$i+1-$K){
				break 1;
			}
			$i++;
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}

function load53($num){

	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		//for($i=$count;$i<=100000;$i++){
		$i=$count;
		while(true){
			//axis43,11
			if(15*($count-1)*($count-1)-3*($count-1) == 15*$i*$i-1*$i-6-$K||
				15*($count-1)*($count-1)+3*($count-1) == 15*$i*$i-1*$i-6-$K){
				if( axis_load(43,$i,$count,$num)!=null){
					$answer = axis_load(43,$i,$count,$num);
				}else{
					$answer = axis_load(11,$i,$count,$num);
				}
			//axis59,7
			}else if(15*($count-1)*($count-1)-3*($count-1) == 15*$i*$i-$K||
				15*($count-1)*($count-1)+3*($count-1) == 15*$i*$i-$K){
				if( axis_load(59,$i,$count,$num)!=null){
					$answer = axis_load(59,$i,$count,$num);
				}else{
					$answer = axis_load(7,$i,$count,$num);
				}
			//axis37,29
			}else if(15*($count-1)*($count-1)-3*($count-1) == 15*$i*$i+3*$i-$K||
				15*($count-1)*($count-1)+3*($count-1) == 15*$i*$i+3*$i-$K){
				if( axis_load(37,$i,$count,$num)!=null){
					$answer = axis_load(37,$i,$count,$num);
				}else{
					$answer = axis_load(29,$i,$count,$num);
				}
			//axis49,17
			}else if(15*($count-1)*($count-1)-3*($count-1) == 15*$i*$i+3*$i-4-$K||
				15*($count-1)*($count-1)+3*($count-1) == 15*$i*$i+3*$i-4-$K){
				if( axis_load(49,$i,$count,$num)!=null){
					$answer = axis_load(49,$i,$count,$num);
				}else{
					$answer = axis_load(17,$i,$count,$num);
				}
			//axis41,13
			}else if(15*($count-1)*($count-1)-3*($count-1) == 15*$i*$i-3*$i-3-$K||
				15*($count-1)*($count-1)+3*($count-1) == 15*$i*$i-3*$i-3-$K){
				if( axis_load(41,$i,$count,$num)!=null){
					$answer = axis_load(41,$i,$count,$num);
				}else{
					$answer = axis_load(13,$i,$count,$num);
				}
			//axis47,19
			}else if(15*($count-1)*($count-1)-3*($count-1) == 15*$i*$i+3*$i-3-$K||
				15*($count-1)*($count-1)+3*($count-1) == 15*$i*$i+3*$i-3-$K){
				if( axis_load(47,$i,$count,$num)!=null){
					$answer = axis_load(47,$i,$count,$num);
				}else{
					$answer = axis_load(19,$i,$count,$num);
				}
			//axis31,23
			}else if(15*($count-1)*($count-1)-3*($count-1) == 15*$i*$i-3*$i-$K||
				15*($count-1)*($count-1)+3*($count-1) == 15*$i*$i-3*$i-$K){
				if( axis_load(31,$i,$count,$num)!=null){
					$answer = axis_load(31,$i,$count,$num);
				}else{
					$answer = axis_load(23,$i,$count,$num);
				}
				
			}else if(15*($count-1)*($count-1)-3*($count-1) < 15*$i*$i-1*$i-6-$K&&
				15*($count-1)*($count-1)+3*($count-1) < 15*$i*$i-1*$i-6-$K&&
				15*($count-1)*($count-1)-3*($count-1) < 15*$i*$i-$K&&
				15*($count-1)*($count-1)+3*($count-1) < 15*$i*$i-$K&&
				15*($count-1)*($count-1)-3*($count-1) < 15*$i*$i+3*$i-$K&&
				15*($count-1)*($count-1)+3*($count-1) < 15*$i*$i+3*$i-$K&&
				15*($count-1)*($count-1)-3*($count-1) < 15*$i*$i+3*$i-4-$K&&
				15*($count-1)*($count-1)+3*($count-1) < 15*$i*$i+3*$i-4-$K&&
				15*($count-1)*($count-1)-3*($count-1) < 15*$i*$i-3*$i-3-$K&&
				15*($count-1)*($count-1)+3*($count-1) < 15*$i*$i-3*$i-3-$K&&
				15*($count-1)*($count-1)-3*($count-1) < 15*$i*$i+3*$i-3-$K&&
				15*($count-1)*($count-1)+3*($count-1) < 15*$i*$i+3*$i-3-$K&&
				15*($count-1)*($count-1)-3*($count-1) < 15*$i*$i-3*$i-$K&&
				15*($count-1)*($count-1)+3*($count-1) < 15*$i*$i-3*$i-$K){
				break 1;
			}
			$i++;
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}

function load59($num){

	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		//for($i=$count;$i<=100000;$i++){
		$i=$count;
		while(true){
			//axis49,11
			if(15*($count-1)*($count-1)-19*($count-1) == 15*$i*$i-6-$K||
				15*($count-1)*($count-1)+19*($count-1) == 15*$i*$i-6-$K){
				if( axis_load(49,$i,$count,$num)!=null){
					$answer = axis_load(49,$i,$count,$num);
				}else{
					$answer = axis_load(11,$i,$count,$num);
				}
			//axis31,29
			}else if(15*($count-1)*($count-1)-1*($count-1) == 15*$i*$i-1*$i-1-$K||
				15*($count-1)*($count-1)+1*($count-1) == 15*$i*$i-1*$i-1-$K){
				if( axis_load(31,$i,$count,$num)!=null){
					$answer = axis_load(31,$i,$count,$num);
				}else{
					$answer = axis_load(29,$i,$count,$num);
				}
			//axis17,7
			}else if(15*($count-1)*($count-1)-5*($count-1) == 15*$i*$i+5*$i-$K||
				15*($count-1)*($count-1)+5*($count-1) == 15*$i*$i+5*$i-$K){
				if( axis_load(17,$i,$count,$num)!=null){
					$answer = axis_load(17,$i,$count,$num);
				}else{
					$answer = axis_load(7,$i,$count,$num);
				}
			//axis41,19
			}else if(15*($count-1)*($count-1)-11*($count-1) == 15*$i*$i+11*$i-$K||
				15*($count-1)*($count-1)+11*($count-1) == 15*$i*$i+11*$i-$K){
				if( axis_load(41,$i,$count,$num)!=null){
					$answer = axis_load(41,$i,$count,$num);
				}else{
					$answer = axis_load(19,$i,$count,$num);
				}
			//axis23,13
			}else if(15*($count-1)*($count-1)-5*($count-1) == 15*$i*$i+5*$i-$K||
				15*($count-1)*($count-1)+5*($count-1) == 15*$i*$i+5*$i-$K){
				if( axis_load(23,$i,$count,$num)!=null){
					$answer = axis_load(23,$i,$count,$num);
				}else{
					$answer = axis_load(13,$i,$count,$num);
				}
				
			}else if(15*($count-1)*($count-1)-19*($count-1) < 15*$i*$i-6-$K&&
				15*($count-1)*($count-1)+19*($count-1) < 15*$i*$i-6-$K&&
				15*($count-1)*($count-1)-1*($count-1) < 15*$i*$i-1*$i-1-$K&&
				15*($count-1)*($count-1)+1*($count-1) < 15*$i*$i-1*$i-1-$K&&
				15*($count-1)*($count-1)-5*($count-1) < 15*$i*$i+5*$i-$K&&
				15*($count-1)*($count-1)+5*($count-1) < 15*$i*$i+5*$i-$K&&
				15*($count-1)*($count-1)-11*($count-1) < 15*$i*$i+11*$i-$K&&
				15*($count-1)*($count-1)+11*($count-1) < 15*$i*$i+11*$i-$K&&
				15*($count-1)*($count-1)-5*($count-1) < 15*$i*$i+5*$i-$K&&
				15*($count-1)*($count-1)+5*($count-1) < 15*$i*$i+5*$i-$K){
				break 1;
			}
			$i++;
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}

function load61($num){

	$count=0;
	$load= $num%60;
	$K = ($num-$load)/60+1;
	$answer = array(0);
	while($answer[0] == 0){
		$count=$count+1;
		//for($i=$count;$i<=100000;$i++){
		$i=$count;
		while(true){
			//axix11
			if(15*($count-1)*($count-1) == 15*$i*$i-19*$i+7-$K){
					$answer = axis_load(11,$i,$count,$num);
			//axis31
			}else if(15*($count-1)*($count-1) == 15*$i*$i+1*$i+1-$K){
					$answer = axis_load(31,$i,$count,$num);
			//axis19
			}else if(15*($count-1)*($count-1) == 15*$i*$i-11*$i+3-$K){
					$answer = axis_load(19,$i,$count,$num);
			//axis29
			}else if(15*($count-1)*($count-1) == 15*$i*$i-1*$i+1-$K){
					$answer = axis_load(7,$i,$count,$num);
			//axis53,17
			}else if(15*($count-1)*($count-1)-18*($count-1) == 15*$i*$i+5*$i-4-$K||
				15*($count-1)*($count-1)+18*($count-1) == 15*$i*$i+5*$i-4-$K){
				if( axis_load(53,$i,$count,$num)!=null){
					$answer = axis_load(53,$i,$count,$num);
				}else{
					$answer = axis_load(17,$i,$count,$num);
				}
			//axis43,7
			}else if(15*($count-1)*($count-1)-18*($count-1) == 15*$i*$i-5*$i-4-$K||
				15*($count-1)*($count-1)+18*($count-1) == 15*$i*$i-5*$i-4-$K){
				if( axis_load(43,$i,$count,$num)!=null){
					$answer = axis_load(43,$i,$count,$num);
				}else{
					$answer = axis_load(7,$i,$count,$num);
				}
			//axis37,13
			}else if(15*($count-1)*($count-1)-12*($count-1) == 15*$i*$i-5*$i-1-$K||
				15*($count-1)*($count-1)+12*($count-1) == 15*$i*$i-5*$i-1-$K){
				if( axis_load(37,$i,$count,$num)!=null){
					$answer = axis_load(37,$i,$count,$num);
				}else{
					$answer = axis_load(13,$i,$count,$num);
				}
			//axis47,23
			}else if(15*($count-1)*($count-1)-12*($count-1) == 15*$i*$i+5*$i-1-$K||
				15*($count-1)*($count-1)+12*($count-1) == 15*$i*$i+5*$i-1-$K){
				if( axis_load(47,$i,$count,$num)!=null){
					$answer = axis_load(47,$i,$count,$num);
				}else{
					$answer = axis_load(23,$i,$count,$num);
				}
				
			}else if(15*($count-1)*($count-1) < 15*$i*$i-19*$i+7-$K&&
				15*($count-1)*($count-1) < 15*$i*$i+1*$i+1-$K&&
				15*($count-1)*($count-1) < 15*$i*$i-11*$i+3-$K&&
				15*($count-1)*($count-1) < 15*$i*$i-1*$i+1-$K&&
				15*($count-1)*($count-1)-18*($count-1) < 15*$i*$i+5*$i-4-$K&&
				15*($count-1)*($count-1)+18*($count-1) < 15*$i*$i+5*$i-4-$K&&
				15*($count-1)*($count-1)-18*($count-1) < 15*$i*$i-5*$i-4-$K&&
				15*($count-1)*($count-1)+18*($count-1) < 15*$i*$i-5*$i-4-$K&&
				15*($count-1)*($count-1)-12*($count-1) < 15*$i*$i-5*$i-1-$K&&
				15*($count-1)*($count-1)+12*($count-1) < 15*$i*$i-5*$i-1-$K&&
				15*($count-1)*($count-1)-12*($count-1) < 15*$i*$i+5*$i-1-$K&&
				15*($count-1)*($count-1)+12*($count-1) < 15*$i*$i+5*$i-1-$K){
				break 1;
			}
			$i++;
		}
	}
	$stranswer = (string)$answer[0]." ".$answer[1];
	return $stranswer;
}

function axis_load($axis,$num1,$num2,$Q){
	$answer = array();
	$answer[0] = ($num1-$num2)*30+$axis;
	$answer[1] = $Q/$answer[0];
	if($answer[1] - round($answer[1])==0){
		return $answer;
	}else{
		return null;
	}
}
print( load61(46561));

?>

