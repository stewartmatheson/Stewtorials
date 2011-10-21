function ArrayForEach(){
    //crete the array
    this.array = [];
	
    //loop over the array with a callback
    this.each = function(callback){
    for(var i = 0; i < self.array.size(); i++)
        callback.call(self, i, self.array[i]);
    };
		
    //this function adds items to an array
    this.add = function(item){
        self.array.push(item);
    };
}

//create our new array
a = new ArrayForEach();

//add items to the array
a.add(1);
a.add(2);
a.add("Hello World!");

//now loop the array using the function we just created
a.each(function(index, value){
	console.log(value);
});

//outputs "1" "2" "Hello World!"
