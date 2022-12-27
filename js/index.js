$(document).ready(function(){
    $('.slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
          {
            breakpoint: 1100,
            settings: {
              centerMode: false,
              centerPadding: '40px',
              slidesToShow: 2
            }
          },
          {
            breakpoint: 770,
            settings: {
              centerMode: true,
              centerPadding: '0px',
              slidesToShow: 1
            }
          }
        ]
    });


    $('.close').click(function() {
      $(this).parent().siblings(".hidden__answer").toggleClass('active');
    });

    $('.close').click(function() {
      $(this).toggleClass('minus');
    });


    $("a.main-btn").click(function() {
      $("html, body").animate({
         scrollTop: $($(this).attr("href")).offset().top + "px"
      }, {
         duration: 1000,
         easing: "swing"
      });
      return false;
   });

  

  const countBtn = document.querySelector(".btc__course-value .count"),
        currency = document.querySelector(".btc__course-currency .currency__usd");

    
  fetchData();
  renderCurrency();

  function renderCurrency(){
      setInterval(() => {
        fetchData();
      }, 20000)
  }

  async function fetchData(){
    const response = await fetch("https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD,BTC");
    const {USD, BTC} = await response.json();

    countBtn.textContent = `${BTC} BTC`;
    currency.textContent = `${USD}$`
  }


  const countBtnAdaptive = document.querySelector(".btc__course-value .countAdaptive"),
        currencyAdaptive = document.querySelector(".btc__course-currency .currency__usdAdaptive");

    
  fetchDataAdaptive();
  renderCurrencyAdaptive();

  function renderCurrencyAdaptive(){
      setInterval(() => {
        fetchData();
      }, 20000)
  }

  async function fetchDataAdaptive(){
    const response = await fetch("https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD,BTC");
    const {USD, BTC} = await response.json();

    countBtnAdaptive.textContent = `${BTC} BTC`;
    currencyAdaptive.textContent = `${USD}$`
  }
  
});

