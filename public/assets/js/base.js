window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    console.log ("bonjour");
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

$(document).ready(()=>{
  var bikes = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
      url: "bikes/recherche/%QUERY%",
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
                    <a href='/bike/`+data.bike_id+`'>
                                        
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