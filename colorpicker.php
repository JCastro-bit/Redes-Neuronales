<?php include('header.php'); ?>
<div class="container" id="sitio">
    <div class="section">

        <div class="row" >
            <div class="col s12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h3>Mi primer Red Neuronal</h3>
                <p class="center-align light">Ejercio de familiarización con el entrenamiento de una red neuronal simple
                    ,para resolver un pequeño problema.Sin tener que programar explicitamente.                    
                </p>
                <input class="jscolor  {onFineChange: 'update(this)'}" value="FFFFFF">
                <h3>Conclusión</h3>
                <p>Se le da ejemplos a la <strong>Red</strong> con las salidas esperadas y dejamos 
                    que la red haga sus predicciones.  <br> La calidad del resultado de la red depende 
                    de la cantidad y calidad de ejemplos con la que la entrenemos. <br>
                    Comenzando con prácticamente ningún conocimiento , lo cual lo hace muy sencillo.
                    <br>Se trabajo con Inteligencia Artificial basada en el Machine Learning, que permite un sistema
                    aprenda y mejore sin ser programado explicítamente. <br>
                    Se utilizaron <strong>Redes Neuronales Artificiales</strong> con una sola capa oculta o bien 
                    <strong>Perceptrón Multicapa</strong>
                </p>
                    
            </div>
            <div>                
                <script src="https://unpkg.com/brain.js@2.0.0-beta.2/dist/brain-browser.min.js"></script>
                               
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>