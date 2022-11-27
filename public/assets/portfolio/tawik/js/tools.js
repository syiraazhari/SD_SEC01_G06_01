/*=============== MIXITUP FILTER PORTFOLIO ===============*/
let mixerPortfolio = mixitup('.work__container', {
    selectors: {
        target: '.work__card'
    },
    animation: {
        duration: 300
    }
});

/* Link active work */ 
const linkWork = document.querySelectorAll('.work__item')

function activeWork(){
	linkWork.forEach(l=> l.classList.remove('active-work')) 
	this.classList.add('active-work')
}

linkWork.forEach(l=> l.addEventListener('click', activeWork))

/*=============== LIGHT DARK THEME ===============*/ 
const themeButton = document.getElementById('theme-button')
const lightTheme = 'light-theme'
const iconTheme = 'bx-sun'

const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

const getCurrentTheme = () => document.body.classList.contains(lightTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx bx-moon' : 'bx bx-sun'

if (selectedTheme) {
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](lightTheme)
  themeButton.classList[selectedIcon === 'bx bx-moon' ? 'add' : 'remove'](iconTheme)
}

themeButton.addEventListener('click', () => {
    document.body.classList.toggle(lightTheme)
    themeButton.classList.toggle(iconTheme)
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})

/*=============== CALCULATOR ===============*/
function getHistory(){
	return document.getElementById("history-value").innerText;
}
function printHistory(num){
	document.getElementById("history-value").innerText=num;
}
function getOutput(){
	return document.getElementById("output-value").innerText;
}
function printOutput(num){
	if(num==""){
		document.getElementById("output-value").innerText=num;
	}
	else{
		document.getElementById("output-value").innerText=getFormattedNumber(num);
	}	
}
function getFormattedNumber(num){
	if(num=="-"){
		return "";
	}
	var n = Number(num);
	var value = n.toLocaleString("en");
	return value;
}
function reverseNumberFormat(num){
	return Number(num.replace(/,/g,''));
}
var operator = document.getElementsByClassName("operator");
for(var i =0;i<operator.length;i++){
	operator[i].addEventListener('click',function(){
		if(this.id=="clear"){
			printHistory("");
			printOutput("");
		}
		else if(this.id=="backspace"){
			var output=reverseNumberFormat(getOutput()).toString();
			if(output){//if output has a value
				output= output.substr(0,output.length-1);
				printOutput(output);
			}
		}
		else{
			var output=getOutput();
			var history=getHistory();
			if(output==""&&history!=""){
				if(isNaN(history[history.length-1])){
					history= history.substr(0,history.length-1);
				}
			}
			if(output!="" || history!=""){
				output= output==""?output:reverseNumberFormat(output);
				history=history+output;
				if(this.id=="="){
					var result=eval(history);
					printOutput(result);
					printHistory("");
				}
				else{
					history=history+this.id;
					printHistory(history);
					printOutput("");
				}
			}
		}
		
	});
}
var number = document.getElementsByClassName("number");
for(var i =0;i<number.length;i++){
	number[i].addEventListener('click',function(){
		var output=reverseNumberFormat(getOutput());
		if(output!=NaN){ //if output is a number
			output=output+this.id;
			printOutput(output);
		}
	});
}

/*=============== BMI  ===============*/
const height = document.querySelector("#height");
const weight = document.querySelector("#weight");
const Calculate = document.querySelector("#calculate");
const yourBMI = document.querySelector("#yourBMI");

Calculate.addEventListener("click" , ()=>{
    //BMI = Body Mass Index
    //m = Mass Means Weight (KG)
    //h = Height (CM)
    //Formula = B = m/h²
    
    
    if(height.value != "" && weight.value != ""){
        let bmiValue = weight.value / (height.value * height.value) * 10000;
        yourBMI.innerHTML = `Your BMI Is : <span> ${bmiValue.toFixed(2)} </span>`
    }
    else
        {
            yourBMI.innerHTML = `Please Enter Correct Value`;
        }
});

/*===============  Unit Converter ===============*/
function lengthConverter(source, valNul) {
    valNul = parseFloat(valNul);
    var inputcm = document.getElementById("inputcm");
    var inputMeters = document.getElementById("inputMeters");
    var inputKilometers = document.getElementById("inputKilometers");

    if(source == "inputcm"){
        inputMeters.value = (valNul/100).toFixed(3);
        inputKilometers.value = (valNul/100000).toFixed(6);
    }
    if(source == "inputMeters"){
        inputcm.value = (valNul/0.01).toFixed();
        inputKilometers.value = (valNul/1000).toFixed(5);
    }
    if(source == "inputKilometers"){
        inputcm.value = (valNul*100000).toFixed();
        inputMeters.value = (valNul*1000).toFixed();
    }
} 