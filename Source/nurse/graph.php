<?php // content="text/plain; charset=utf-8"
require_once ('../jpgraph/jpgraph.php');
require_once ('../jpgraph/jpgraph_line.php');

$host = "localhost";
$username = "root";
$password = "root";
$database = "Easycare";

$con=mysqli_connect($host,$username,$password,$database);
$sql="SELECT * from conditions WHERE ID_patient='0000000001'";
$result=mysqli_query($con,$sql);
$data = array();
$date = array();
while($row = mysqli_fetch_array($result)) {
	array_push($data, $row['weight']);
	array_push($date, substr($row['dates'], 0, 10));
}

// Setup the graph
$graph = new Graph(1000, 600);
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->SetBox(false);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels($date);
$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($data);
$graph->Add($p1);
$p1->SetColor("#6495ED");


$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke();
?>