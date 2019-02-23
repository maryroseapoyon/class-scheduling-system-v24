$d = array(" "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
                              $length = $hey->sched_length;
                              foreach($times as $t){
                                echo ' <tr>
                                <td>'.$t.'</td>';
                                foreach($hey as $h){
                                    if($h->sched_from==$t&&$h->sched_days=="monday"){
                                         echo '<td rowspan=".$length." style="background-color:#c51e3a; color:#fff;"><center>'.$h->subject_name.'<br>'.$h->last_name.'&nbsp'.$h->first_name.'&nbsp '.$h->middle_name.'</center></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>';
                                       
                                    }

                                    

                                }
                                foreach($hey as $h){
                                    if($h->sched_from==$t&&$h->sched_days=="tuesday"){
                                         echo '<td></td>
                                         <td style="background-color:#c51e3a; color:#fff;"><center>'.$h->subject_name.'<br>'.$h->last_name.'&nbsp'.$h->first_name.'&nbsp '.$h->middle_name.'</center></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>';
                                    }
                                   

                                }
                                foreach($hey as $h){
                                    if($h->sched_from==$t&&$h->sched_days=="wednesday"){
                                         echo '<td></td>
                                         <td></td>
                                         <td style="background-color:#c51e3a; color:#fff;"><center>'.$h->subject_name.'<br>'.$h->last_name.'&nbsp'.$h->first_name.'&nbsp '.$h->middle_name.'</center></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>';
                                    }
                                    
                                }
                                foreach($hey as $h){
                                    if($h->sched_from==$t&&$h->sched_days=="thursday"){
                                         echo '<td>'.$h->sched_name.'</td>
                                         <td></td>
                                         <td></td>
                                         <td style="background-color:#c51e3a; color:#fff;"><center>'.$h->subject_name.'<br>'.$h->last_name.'&nbsp'.$h->first_name.'&nbsp '.$h->middle_name.'</center></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>';
                                    }
                                   

                                }
                                foreach($hey as $h){
                                    if($h->sched_from==$t&&$h->sched_days=="friday"){
                                         echo '<td>'.$h->sched_name.'</td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td style="background-color:#c51e3a; color:#fff;"><center>'.$h->subject_name.'<br>'.$h->last_name.'&nbsp'.$h->first_name.'&nbsp '.$h->middle_name.'</center></td>
                                         <td></td>
                                         <td></td>';
                                    }
                                    
                                }
                                foreach($hey as $h){
                                    if($h->sched_from==$t&&$h->sched_days=="saturday"){
                                         echo '<td>'.$h->sched_name.'</td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td style="background-color:#c51e3a; color:#fff;"><center>'.$h->subject_name.'<br>'.$h->last_name.'&nbsp'.$h->first_name.'&nbsp '.$h->middle_name.'</center></td>
                                         <td></td>';
                                    }
                                   
                                }
                                foreach($hey as $h){
                                    if($h->sched_from==$t&&$h->sched_days=="sunday"){
                                         echo '<td>'.$h->sched_name.'</td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td style="background-color:#c51e3a; color:#fff;"><center>'.$h->subject_name.'<br>'.$h->last_name.'&nbsp'.$h->first_name.'&nbsp '.$h->middle_name.'</center></td>';
                                    }
                                    
                                   
                                }