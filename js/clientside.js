window.onload = getReady;
var goal,raised_dollars, raised_pct, sponsors, school, pct_funded, pct_raised, pct_school,remaining;

function prettyNumber(x){
	var pIx;
	x = x.toFixed(2);
	pIx = x.indexOf(".");
	if (x.substring(pIx+1).length > 2)
		x = x.substring(0,pIx+1) + x.substring(pIx+1,pIx+3);
	return x;
}

function getReady(){
	/* Update the numbers */
	
	goal = document.getElementById("goal");
	raised_dollars = document.getElementById("raised_dollars");
	raised_pct = document.getElementById("raised_pct");
	sponsors = document.getElementById("raised_sponsors");
	school = document.getElementById("progressSchool");
  	remaining = document.getElementById("remaining");
    	
  	if (goal !== null) 
    	goal.innerHTML = "$"+funds["needed"];
	if (raised_dollars !== null) 
    	raised_dollars.innerHTML = "$" + prettyNumber(funds["raised"]);
	if (sponsors !== null) 
    	sponsors.innerHTML = funds["sponsors"];
  	if (remaining !== null)
    	remaining.innerHTML = "$"+ prettyNumber(funds["needed"] - funds["raised"] - funds["school"])

	pct_funded = 100 * (funds["raised"]+funds["school"]) / funds["needed"];

	if (raised_pct !== null) 
    	raised_pct.innerHTML = prettyNumber(pct_funded)+"%";

	/* Update the progress bar */
	pct_raised = prettyNumber(100 * funds["raised"] / funds["needed"]);
	pct_school = prettyNumber(100 * funds["school"] / funds["needed"]);
	document.getElementById("progress").style = "width: "+pct_raised+"%";
	document.getElementById("progressSchool").style = "width: "+pct_school+"%";

	/* Start countdown timer */
	CountDownTimer(funds["deadline"], "countdown");
}