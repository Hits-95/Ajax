console.log('Hits Code...');

let fetchBtn = document.getElementById("fetch_data");
fetchBtn.addEventListener('click', fetchDataHandler);

function fetchDataHandler() {

    console.log('your click fetch data....');

    //initiat XMLHttpRequest()
    const xhr = new XMLHttpRequest();

    //what to do on progress...
    xhr.onprogress = function () {
        console.log('On Progress...');
    }

    //what to do when responce is ready...
    xhr.onload = function () {
        if (this.status === 200) {
            console.log(xhr.responseText);
        }
    }

    //open the xhr
    //xhr.open('GET','https://jsonplaceholder.typicode.com/todos/1',true);

    //post request...
    xhr.open('POST', 'https://jsonplaceholder.typicode.com/posts', true);
    xhr.setRequestHeader("Content-type", "application/json");
    temp = '{"id" : 1, "title" : "Hitesh", "body" : "bar", "userId" : 23}';
//send request...
xhr.send(temp);

}//fetch Data Handler ...
