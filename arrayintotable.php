<html>

<head>
    <title>Table</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Kashish</td>
            <td>21</td>
            <td>Female</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Anuj</td>
            <td>21</td>
            <td>Male</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Harsh</td>
            <td>21</td>
            <td>Male</td>
        </tr>
    </table>
    <?php
    $users=[
        ["no"=>1,"name"=>"kashish","age"=>20,"gender"=>"female"],
        ["no"=>2,"name"=>"anuj","age"=>20,"gender"=>"male"],
        ["no"=>3,"name"=>"harsh","age"=>20,"gender"=>"male"]
    ];
    echo "<table border='1'>";
    for($i=0;$i<count($users);$i++){
        echo "<tr>";
        foreach($users[$i] as $key=>$value){
            echo "<th>";
            echo $key;
            echo "</th>";
            echo "<td>";
            echo $value;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>
