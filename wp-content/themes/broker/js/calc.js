jQuery(document).ready(function($){var per10=0.1;var per20=0.2;var per5=0.05;$('#euroblaha').submit(function(e){e.preventDefault();var age=$('#age5').val();var motor=$('#motor5').val();var vol=$('#vol5').val();var price=$('#price5').val();var discount=$('input[name=drone]:checked').val();var tax;var nds;if(age>15)age=15;switch(+discount){case 1:discountamount=0.5;break;case 2:discountamount=0.75;break;default:discountamount=1;}
var calc=function(n){var poshlina=parseFloat(price*per10);var aktsiz=parseFloat(n*age*(vol/1000)*discountamount);nds=parseFloat((parseFloat(poshlina)+parseFloat(aktsiz)+parseFloat(price))*0.2);tax=parseFloat(parseFloat(poshlina)+parseFloat(aktsiz)+parseFloat(nds));$('.tax').text(tax.toFixed(2));};switch(+motor){case 1:if(vol<3000){calc(50);}
else{calc(100);}
break;case 2:if(vol<3500){calc(75);}
else{calc(150);}
break;}});$('#light-auto').submit(function(e){e.preventDefault();var age=$('#age').val();var motor=$('#motor').val();var vol=$('#vol').val();var price=$('#price').val();var tax;var calc=function(n){tax=(((price*per10)+(vol*n)+(+price))*per20)+(price*per10)+(vol*n);$('.tax').text(tax.toFixed(2));};switch(+motor){case 1:switch(+age){case 1:if(vol<1000){calc(0.102);}
else if(1000<=vol&&vol<1500){calc(0.063);}
else if(1500<=vol&&vol<2200){calc(0.267);}
else if(2200<=vol&&vol<3000){calc(0.276);}
else{calc(2.209);}
break;case 2:if(vol<1000){calc(1.094);}
else if(1000<=vol&&vol<1500){calc(1.367);}
else if(1500<=vol&&vol<2200){calc(1.643);}
else if(2200<=vol&&vol<3000){calc(2.213);}
else{calc(3.329);}
break;break;case 3:if(vol<1000){calc(1.438);}
else if(1000<=vol&&vol<1500){calc(1.761);}
else if(1500<=vol&&vol<2200){calc(2.643);}
else if(2200<=vol&&vol<3000){calc(4.985);}
else{calc(4.985);}
break;break;default:alert('Упс, что-то пошло не так')}
break;case 2:switch(+age){case 1:if(vol<1500){calc(0.103);}
else if(1500<=vol&&vol<2500){calc(0.327);}
else{calc(2.209);}
break;case 2:if(vol<1500){calc(1.367);}
else if(1500<=vol&&vol<2500){calc(1.923);}
else{calc(2.779);}
break;break;case 3:if(vol<1500){calc(1.761);}
else if(1500<=vol&&vol<2500){calc(2.441);}
else{calc(4.715);}
break;break;default:alert('Упс, что-то пошло не так')}
break;default:alert('Упс, что-то пошло не так');}});$('#electro-auto').submit(function(e){e.preventDefault();var price1=$('#price-electro').val();var kvt=$('#kvt').val();var tax1;nds=((+kvt)+(+price1))*per20;tax1=((+kvt)+(+nds));$('.tax').text(tax1.toFixed(2));});$('#hard-drive').submit(function(e){e.preventDefault();var age=$('#age3').val();var motor=$('#motor3').val();var vol=$('#vol3').val();var price=$('#price3').val();var wieght=$('#wieght').val();var tax;var calc=function(n){tax=(((price*per10)+(vol*n)+(+price))*per20)+(price*per10)+(vol*n);$('.tax').text(tax.toFixed(2));};var calc2=function(c){tax=(((price*per5)+(vol*c)+(+price))*per20)+(price*per5)+(vol*c);$('.tax').text(tax.toFixed(2));};switch(+motor){case 1:switch(+age){case 1:if(wieght<5){calc2(0.01);}
else{calc(0.013);}
break;case 2:if(wieght<5){calc2(0.02);}
else{calc(0.026);}
break;case 3:if(wieght<5){calc2(0.8);}
else{calc(1.04);}
break;case 4:if(wieght<5){calc2(1);}
else{calc(1.3);}
break;default:alert('Упс, что-то пошло не так')}
break;case 2:switch(+age){case 1:if(wieght<5){calc(0.01);}
else if(5<=wieght&&wieght<20){calc(0.013);}
else{calc(0.016);}
break;case 2:if(wieght<5){calc(0.02);}
else if(5<=wieght&&wieght<20){calc(0.026);}
else{calc(0.033);}
break;case 3:if(wieght<5){calc(0.8);}
else if(5<=wieght&&wieght<20){calc(1.04);}
else{calc(1.32);}
break;case 4:if(wieght<5){calc(1);}
else if(5<=wieght&&wieght<20){calc(1.3);}
else{calc(1.65);}
break;break;default:alert('Упс, что-то пошло не так')}
break;default:alert('Упс, что-то пошло не так');}});$('#moto').submit(function(e){e.preventDefault();var price=$('#price4').val();var vol=$('#vol4').val();var tax;if(vol<500){tax=(((price*per10)+(vol*0.062)+(+price))*per20)+(price*per10)+(vol*0.062);$('.tax').text(tax.toFixed(2));}
else if(500<=vol&&vol<800){tax=(((price*per10)+(vol*0.443)+(+price))*per20)+(price*per10)+(vol*0.443);$('.tax').text(tax.toFixed(2));}
else{tax=(((price*per10)+(vol*0.447)+(+price))*per20)+(price*per10)+(vol*0.447);$('.tax').text(tax.toFixed(2));}});});