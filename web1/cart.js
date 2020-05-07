var addToCartButtons = document.getElementsByClassName('btn-add')
for(var i=0;i< addToCartButtons.length;i++)
{
    var button = addToCartButtons[i]
    button.addEventListener('click',addtoCartClicked)
}
function addtoCartClicked(event)
{
    var button = event.target
    var shopitem = button.parentElement.parentElement.parentElement.parentElement.parentElement
    var details = shopitem.getElementsByClassName('details')[0].innertext
    var money= shopitem.getElementsByClassName('money')[0].innertext
    var imageSrc = shopitem.getElementsByClassName('image')[0].Src
    console.log(details,money,imageSrc)
    AddItemToCart(details,money,imageSrc)

}
function AddItemToCart(details,money,imageSrc)
{
    var cartRow = document.createElement('div')
    
}
