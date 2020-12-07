jQuery(document).ready(function(){
  "use script";
  /*scroll down btn*/
  var scrollBtn = $("#scrollBtn");
  scrollBtn.on("click", function (event){
    event.preventDefault();
    var wHight = $(window).height();
    $("html, body").animate({
      scrollTop: wHight
    }, 1000);
  });
  /*post block*/
  var dropDownBtn = $(".drop__down--header");
  dropDownBtn.on("click", function(){
    $(this).toggleClass("header--active");
    $(this).parent(".drop__down").find(".drop__down--list").toggleClass("show__list");
  });
  /*burger btn click*/
  var burgerBtn = $("#burgerBtn");
  var mainMenu = $(".main__menu");
  burgerBtn.on("click", function(){
    $(".burger--item").toggleClass("open__button");
    mainMenu.toggleClass("main__menu--mobile");
  });
});