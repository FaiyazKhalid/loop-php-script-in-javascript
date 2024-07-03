<p id="demo"></p>

<script>
let text = "";

for (let i = 1; i < 500; i++) {
  text += "if(!empty($section"+ i +")){  $ss"+ i +"=str_replace('=',' ',$section"+ i +" ); $p1 = $ss"+ i +". 'of '. $topic; $d1=$data"+ i +"; $c1= $topic; $d1.= '\n[[Category:' . $category . ']]'; $wiki->edit($p1,$d1,$c1); }             " + "<br>";
}

document.getElementById("demo").innerHTML = text;
</script>
