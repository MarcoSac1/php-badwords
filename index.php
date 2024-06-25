<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BADWORDS</title>
</head>
<body>
    <main>
        <h1>PHP-BADWORDS</h1>
        <p>
        <?php
        $textPhar = 'Marx e Engels analizzano la storia come lotta di classe, sempre esistita e combattuta tra oppressi e oppressori. I due sottolineano come questo contrasto non solo sia ancora presente nella moderna società borghese, ma che piuttosto si sia addirittura inasprito, poiché in seguito a grandi trasformazioni sociali connesse alla trasformazione del modello produttivo è animato da solo due grandi classi: la borghesia e il proletariato. La prima, classe rivoluzionaria nel Basso Medioevo e all inizio dell età moderna, dopo aver annientato la struttura economica e politica allora esistente, ormai inadeguata e obsoleta, si consacrò come classe dominante a tutti gli effetti durante la rivoluzione industriale. La seconda, nata in seguito alla nascita del modello economico capitalistico, risulta essere quella oppressa, ma potenzialmente dominante.';
        echo $textPhar;
        ?>
        </p>
        
        <h3>length: <?php echo strlen($textPhar); ?> </h3>
        
        <h3>word to be censored: <?php echo $_GET['change']?> </h3>

        <form action="./index.php" method='GET'>
            <input type="text" name='change' id='change'>
            <button type='submit'>
                send
            </button>
        </form>
        
        <p>
            <?php
        $textPhar= str_replace($_GET['change'],'(***)', $textPhar);
        echo $textPhar;
        ?>
        <h3>lunghezza: <?php echo strlen($textPhar); ?> </h3>
        </p>
    </main>
</body>
</html>