<!doctype>
<html>
<head>
    <title>jsPDF</title>
<!--    <script type="text/javascript" src="jsPDF/dist/jspdf.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
</head>
<body>
       <h1>jsPDF demo</h1>
       Naam: <input type="text" id="naamInput" value="<?php echo $naamInput ?>" /> <br>
       Inkomen PER per maand: <input type="number" id="inkomenInput" value="<?php echo $inkomenInput ?>" /><br>
       Uitgaven per maand: <input type="number" id="uitgavenInput" value="<?php echo $uitgavenInput ?>" /><br>


       <button onclick="download()">Download PDF</button>
</body>
<script src="downloadButton.js"></script>

</html>