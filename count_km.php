<?phpinclude 'connect.php';$city1=$_GET['city1'];$city2=$_GET['city2'];if($city2==$city1){$out=0;}else{$res = mysql_query("SELECT * FROM dist WHERE city1 = '". $city1 ."' and city2 = '". $city2 ."'  limit 1"); $data = mysql_fetch_assoc($res); $out=$data['km'];}echo $out;?>