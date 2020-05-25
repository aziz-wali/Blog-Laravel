
var categories = document.querySelectorAll('.categories li');

console.log(categories.length)

for(var i=0; i<categories.length ; i++){

    categories[i].addEventListener('click',function(){

      // this.siblings.classList.remove('active');

       categories.forEach(function(category){

        category.classList.remove('active')
       
       });
       
       this.classList.add('active');
     
    });
 
}
