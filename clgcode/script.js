
const people = [
    { name: 'Assignment 1'},
    { name: 'Assignment 2'},
    { name: 'Assignment 3'},
    { name: 'Assignment 4'},
    { name: 'Assignment 5'},
    { name: 'Assignment 6'},
    { name: 'Assignment 7'},
    { name: 'Assignment 8'},
    { name: 'Assignment 9'},
    { name: 'Assignment 10'},
    { name: 'Assignment 11'},
    
]

whateverElement.addEventListener("event type", () => {
});
    const searchInput = document.querySelector('.input')
    searchInput.addEventListener("input", (e) => {
       
        let value = e.target.value
        if (value && value.trim().length > 0){
            // 3. redefine 'value' to exclude white space and change input to all lowercase
             value = value.trim().toLowerCase()
            // 4. return the results only if the value of the search is included in the person's name
            // we need to write code (a function for filtering through our data to include the search input value)
        } else {
            // 5. return nothing
            // input is invalid -- show an error message or show no results
    
        }
    
    });

    // creating and declaring a function called "setList"
    // setList takes in a param of "results"
    function setList(results){
    
        for (const person of results){
            // creating a li element for each result item
            const resultItem = document.createElement('li')
    
            // adding a class to each item of the results
            resultItem.classList.add('result-item')
    
            // grabbing the name of the current point of the loop and adding the name as the list item's text
            const text = document.createTextNode(person.name)
    
            // appending the text to the result item
            resultItem.appendChild(text)
    
            // appending the result item to the list
            list.appendChild(resultItem)
        }
    }
    searchInput.addEventListener("input", (e) => {
        let value = e.target.value
    
        if (value && value.trim().length > 0){
             value = value.trim().toLowerCase()
    
            //returning only the results of setList if the value of the search is included in the person's name
            setList(people.filter(person => {
                return person.name.includes(value)
            }))
        }
    });
