function HTMLToPDF(){
    const {jsPDF} = window.jspdf;
    var doc = new jsPDF('1', 'mm',[1200 , 1210]);
    var pdfjs = document.querySelector("#html-template");
    html2canvas(pdfjs).then((canvas)=>{
        const imgData = canvas.toDataURL('imgData/png');
        doc.addImage(imgData,'PNG',0,0);
        doc.save("htmltopdf.pdf");
    });
}


