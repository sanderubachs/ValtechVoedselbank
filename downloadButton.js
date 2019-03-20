function download() {
    const document = new jsPDF("p", "mm", "a4")

    var width = document.internal.pageSize.getWidth();
    var height = document.internal.pageSize.getHeight();


    var naamInput = $("#naamInput").val();
    var inkomenInput = $("#inkomenInput").val();
    var uitgavenInput = $("#uitgavenInput").val();

    var som = inkomenInput - uitgavenInput;

    var res = String(som)


    document.text(20,30, "naam: " + naamInput);
    document.text(20,40, "inkomen: " + inkomenInput);
    document.text(20,45, "uitgaven: " + uitgavenInput);

    document.setLineWidth(0.7)
    document.line(20, 47, 60, 47) // horizontal line

    document.text(20,53, res);

    // print(width, height)
    document.save('test')
}