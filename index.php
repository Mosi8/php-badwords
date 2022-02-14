<?php 
    $testo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam orci nisl, maximus ut mauris quis, accumsan ultricies libero. Nam sagittis quam quis odio rutrum pulvinar. Cras sollicitudin lorem quis neque hendrerit interdum. Aenean at turpis purus. Suspendisse potenti. Pellentesque eu congue ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce rutrum ultricies ex, sit amet malesuada urna molestie eget. Nullam dapibus leo eget urna condimentum gravida. Vivamus sit amet faucibus felis, et suscipit arcu. Sed finibus, nisl nec consequat sagittis, ante arcu consequat lectus, et rutrum ex ante eget elit. Mauris vel efficitur quam, a imperdiet lorem. Etiam pellentesque nibh eros, eget placerat diam vehicula vitae.";
    $primalunghezza = strlen($testo);
    $censura = $_GET["cens"];
    $censurato = str_replace($censura, "***", $testo);
    $secondalunghezza = strlen($censurato);
?>



<p>
    <?php echo $testo ?> 
    <br>
    <br>
    Lunghezza: <?php echo $primalunghezza ?>
    <br>
    <br>
    <?php echo $censurato ?> 
    <br>
    <br>
    Lunghezza: <?php echo $secondalunghezza ?>
</p>