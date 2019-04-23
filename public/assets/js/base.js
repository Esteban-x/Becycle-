// Scroll top button

window.onscroll = function(){
  scrollFunction();
  scrollFuncNav();
  scrollFuncCat();
};

function scrollFunction() {
    console.log ("Le nombre de pixels que tu as scroll");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// Scroll navbar

function scrollFuncNav() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scrollbar").style.top = "-60px";
  } else {
    document.getElementById("scrollbar").style.top = "0";
  }
}



$(document).ready(()=>{
  var bikes = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
      url: "/recherche/%QUERY%",
      wildcard: '%QUERY%',
      filter: function (bikes)
      {
        return $.map(bikes, function(bike)
        {
          return{
            bike_id: bike.id,
            bike_name: bike.name,
          }
        })
      }
    }
  })
  bikes.initialize();
  $('#form_query').typeahead({
        hint: true
      },
      {
        name: 'bikes',
        source: bikes.ttAdapter(),
        display: 'bike_name',
        templates: {
          suggestion: function (data)
          {
            return `
                    <a href='/bike/show/`+data.bike_id+`'>
                      <span>`+data.bike_name+`</span>
                    </a>
                            `
          }
        },
        footer: function (query)
        {
          return '<div class="text-center">Plus d\'info sur le: '+query.query+'</div>'
        }
      }
  )
})

/* toggle "Catégories" */

window.addEventListener("DOMContentLoaded", function() {
  if (window.matchMedia("(max-width: 768px)").matches) {
    document.getElementById("collapseCategories").className = "collapse";
  } else {
    document.getElementById("collapseCategories").className = "collapse show";
  }
  });