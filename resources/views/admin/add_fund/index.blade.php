<head>
    <meta charset=utf-8 />
    <title>Insert row in a table - w3resource</title>
</head><body>
<table id="sampleTable" border="1">
    <tr>
        <label class="form-control">First Name :</label>
        <td>
            <input class="form-control" type="text">
        </td>
    </tr>
</table><br>
<input type="button" onclick="insert_Row()" value="Insert row">
<input type="button" onclick="delete_Row()" value="Delete row">
</body>

<script>
    function insert_Row()
    {
        var x = document.getElementById('sampleTable').insertRow(0);
        var y = x.insertCell(0);
        y.innerHTML = "<td><input class='form-control' type='text'> </td>"
    }

</script>
