function createTable()
{
    var rows=document.getElementById('rows').value;
    var parent =document.getElementById('i');
    var row=document.getElementById('rows');
    var tbody = '';
	var drp= '<table class="table"><thead><tr><th>student id</th><th>student name</th><th>age</th><th>gender</th><th>parental status</th><th>family type</th><th>siblings</th><th>order of birth</th><th>parents education level</th><th>family income</th></tr></thead>';
    for( var i=0; i<rows;i++)
    {
        tbody += '<tr>';
        for( var j=0; j<10;j++)
        {
            tbody += '<td>';
            tbody += '<input type="text" name="'+i*10+j+'" id="'+i*10+j+'" required></input>';
            tbody += '</td>';
        }
        tbody += '</tr>\n';
    }
    var tfooter = '</table>';
    $("#rows").fadeOut();
    document.getElementById('wrapper').innerHTML = drp + tbody + tfooter;
}