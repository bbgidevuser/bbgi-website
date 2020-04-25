<?php

/**
 * @link: http://www.Awcore.com/dev
 */
 
   function pagination($query,$order, $per_page = 10,$page = 1, $url = '?', $url1 = '&&'){     
   //echo $query." ".$order." ".$per_page; die();
       $query = "SELECT COUNT(*) as `num` FROM {$query}"; 
    	$row = mysql_fetch_array(mysql_query($query));
    	$total = $row['num']; 
        $adjacents = "2"; 

    	$page = ($page == 0 ? 1 : $page); 
    	$start = ($page - 1) * $per_page;								
		
    	$prev = $page - 1;							
    	$next = $page + 1;
        $lastpage = ceil($total/$per_page);
    	$lpm1 = $lastpage - 1;
    	
    	$pagination = "";
    	if($lastpage > 1)
    	{	
    		
                   // $pagination .= "<li>Page $page of $lastpage</li>";
    		if ($lastpage < 7 + ($adjacents * 2))
    		{	
    			for ($counter = 1; $counter <= $lastpage; $counter++)
    			{
    				if ($counter == $page)
    					$pagination.= "<li class='active'><a class='current'>$counter</a></li>";
    				else
    					$pagination.= "<li><a href='{$url}order=$order{$url1}page=$counter'>$counter</a></li>";					
    			}
    		}
    		elseif($lastpage > 5 + ($adjacents * 2))
    		{
    			if($page < 1 + ($adjacents * 2))		
    			{
    				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li class='active'><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}order=$order{$url1}page=$counter'>$counter</a></li>";					
    				}
    				//$pagination.= "<li class='dot'>...</li>";
    				$pagination.= "<li><a href='{$url}order=$order{$url1}page=$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}order=$order{$url1}page=$lastpage'>$lastpage</a></li>";		
    			}
    			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
    			{
    				$pagination.= "<li><a href='{$url}order=$order{$url1}page=1'>1</a></li>";
    				$pagination.= "<li><a href='{$url}order=$order{$url1}page=2'>2</a></li>";
    				//$pagination.= "<li class='dot'>...</li>";
    				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li class='active' ><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}order=$order{$url1}page=$counter'>$counter</a></li>";					
    				}
    				//$pagination.= "<li class='dot'>..</li>";
    				$pagination.= "<li><a href='{$url}order=$order{$url1}page=$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}order=$order{$url1}page=$lastpage'>$lastpage</a></li>";		
    			}
    			else
    			{
    				$pagination.= "<li><a href='{$url}order=$order{$url1}page=1'>1</a></li>";
    				$pagination.= "<li><a href='{$url}order=$order{$url1}page=2'>2</a></li>";
    				//$pagination.= "<li class='dot'>..</li>";
    				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}order=$order{$url1}page=$counter'>$counter</a></li>";					
    				}
    			}
    		}
    		
    		if ($page < $counter - 1){ 
    			$pagination.= "<li><a href='{$url}order=$order{$url1}page=$next' class='Next'>Next</a></li>";
                $pagination.= "<li><a href='{$url}order=$order{$url1}page=$lastpage' class='Last'>Last</a></li>";
    		}else{
    			$pagination.= "<li><a class='current Next'>Next</a></li>";
                $pagination.= "<li><a class='current Last'>Last</a></li>";
            }
    		$pagination.= "\n";		
    	}
    
    
        return $pagination;
    } 
?>