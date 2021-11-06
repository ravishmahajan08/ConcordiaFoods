function updatePrice() {

  let qt = document.getElementById("quantity");
  let costPerKg = document.getElementById("cost-per-kg");
  let weight = document.getElementById("weight");
  let totPrice;

  //Check if the price is per kg or per unit
  //Weight will be null if it is per unit
  if (weight == null)
    totPrice = qt.value * costPerKg.innerHTML;
  else
    totPrice = qt.value * costPerKg.innerHTML * weight.innerHTML;

  //Round to two decimals
  totPrice = Math.round(totPrice*100) / 100;
  document.getElementById("tot-price").innerHTML = "$" + totPrice;

}

function storeQ(store){
  localStorage.setItem(store,document.getElementById("quantity").value);
}
function getQ(store){
  let value=localStorage.getItem(store);
  if(localStorage.getItem(store)==""||localStorage.getItem(store)==null){
  document.getElementById("quantity").value="0";
  }
  else{
    document.getElementById('quantity').value=localStorage.getItem(store);
  }
  updatePrice();
}
function clearQ(store){
  document.getElementById('quantity').value="0";
  localStorage.removeItem(store);
}

function deleteTableRow(r) {
  let i = r.parentNode.parentNode.rowIndex;
  document.getElementById("productTable").deleteRow(i);
}

function openDescription() {
  let descr = document.getElementById("txt-more-description");
  let btn = document.getElementById("bt-more-description")
  if (descr.style.display == "block") {
    descr.style.display = "none";
    btn.innerHTML = "View Description...";   
  }
  else {
    descr.style.display = "block";
    btn.innerHTML = "See Less...";
  }
    
}