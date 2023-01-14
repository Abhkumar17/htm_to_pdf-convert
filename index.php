<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>convert html to pdf hindi</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="html-template">
    <?php require_once 'template.php';?>
    </div>

    <div class="link-container">
        <button class="btn-generate" onclick="HTMLToPDF()">Generate PDF</button>
    </div>
    <script src="assets/js/jspdf.umd.min.js"></script>
    <script src="https://unpkg.com/html2canvas@1.4.1/dist/html2canvas.js"></script>
    <script src="main.js"></script>

    <!-- <script>
        renderedCallback(){
        Promise.all([
            loadScript(this, jspdf+'/jspdf/jspdf.umd.min.js'),
        ]);
    }

    generatePdf(){
        

        const doc = new jsPDF();
        doc.text("Hello world!", 10, 10);
        doc.save("a4.pdf");
    }
    </script> -->
</body>
</html>