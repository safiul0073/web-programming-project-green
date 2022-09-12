
// const setTableData = async () => {
//   let products = [];
//   await fetch("../assets/MOCK_DATA.json")
//     .then(async(response) => {
//       products = await response.json();
//       const tableElement = document.getElementById('myTable');
      
//       const tbodyElement = document.createElement('tbody');

//       products.map((product) => {
//         const trElement = document.createElement('tr');
//         const tableId = document.createElement('td')
//         const productName = document.createElement('td');
//         const category = document.createElement('td');
//         const rating = document.createElement('td');
//         const image = document.createElement('td');
//         const stock = document.createElement('td');
//         const price = document.createElement('td');
//         tableId.innerHTML = product.id;
//         productName.innerHTML = product.title;
//         category.innerHTML = product.category;
//         rating.innerHTML = product.rating;
//         stock.innerHTML = product.stock;
//         price.innerHTML = product.price;
//         var img = document.createElement('img');
//         img.src =  product.images[0]
//         image.appendChild(img);
//         trElement.appendChild(tableId);
//         trElement.appendChild(productName); 
//         trElement.appendChild(category); 
//         trElement.appendChild(rating); 
//         trElement.appendChild(image); 
//         trElement.appendChild(stock); 
//         trElement.appendChild(price); 
//         tbodyElement.appendChild(trElement);
//         tableElement.appendChild(tbodyElement);
//       })
//     })
// }


// setTableData()
function searchKey() {
    var input, filter, table, tr,  i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td1 = tr[i].getElementsByTagName("td")[1];
      td2 = tr[i].getElementsByTagName("td")[2];
      
      if (td1 || td2) {
        txtValue1 = td1.textContent || td1.innerText;
        txtValue2 = td2.textContent || td2.innerText;
        if (txtValue1.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }