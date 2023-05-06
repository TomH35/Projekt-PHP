(function () {
    'use strict'
  
    // Vybrať všetky formuláre pri ktorých chceme použiť validáciu
    var forms = document.querySelectorAll('.needs-validation')
  
    // cyklom prejdeme cez tie formuláre aby sme zabranili submitu
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()

