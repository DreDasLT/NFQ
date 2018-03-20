var buttons = document.getElementsByClassName("like-button");

var onLikeButtonClicked = function() {
    alert("You liked the article!");
};

Array.from(buttons).forEach(function(element) {
    element.addEventListener('click', onLikeButtonClicked);
});