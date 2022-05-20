<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_radar.php');
	
// Some data to plot
if(isset($_GET['U'])) { $U = $_GET['U']; }
if(isset($_GET['G'])) { $G = $_GET['G']; }
if(isset($_GET['H'])) { $H = $_GET['H']; }
if(isset($_GET['T'])) { $T = $_GET['T']; }
if(isset($_GET['Sa'])) { $Sa = $_GET['Sa']; }
if(isset($_GET['Po'])) { $Po = $_GET['Po']; }
if(isset($_GET['A'])) { $A = $_GET['A']; }
if(isset($_GET['Pl'])) { $Pl = $_GET['Pl']; }
if(isset($_GET['St'])) { $St = $_GET['St']; }
if(isset($_GET['Se'])) { $Se = $_GET['Se']; }

$data = array($U,$G,$H,$T,$Sa,$Po,$A,$Pl,$St,$Se);
	
// Create the graph and the plot
$graph = new RadarGraph(600,400);

// Create the titles for the axis
$titles = array("Universalism", "Goodintentions", "Harmony", "tradition", "safety", "power", "Achievement", "pleasure", "Stimulation", "Selfdetermination");
$graph->SetTitles($titles);

// Add grid lines
$graph->grid->Show();
$graph->grid->SetColor('darkred');
$graph->grid->SetLineStyle('dotted');

$plot = new RadarPlot($data);
$plot->SetFillColor('lightblue');

// Add the plot and display the graph
$graph->Add($plot);
$graph->Stroke();
?>