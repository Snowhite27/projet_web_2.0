import { createApp,ref } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

const select_package = ref({})
const details = ref()
const inclusions = ref()
const month = ref("")
const year = ref("")
const month_array = ref("")
const calendar = ref([])
const selected = ref(null)
const select_date = ref("")
const user_id = ref()

/**
 * Prendre un id d'un forfait et affiche ses infos spécifiques
 * Créer un array pour les details et les inclusions
 * @param {objet} object du forfait
 */
function showPackage(package_infos, user){
    const id = package_infos.id
    user_id.value = user

    /**
     * Infos sur le forfait sélectionné
     */
    fetch("/packages/" + id).then(reply => reply.json()).then(data=> {
    select_package.value = data
    })

    details.value = splitLine(package_infos.description)
    inclusions.value = splitLine(package_infos.includes)

    getDateUnix()

    /**
    * Ressort les journées du mois
    */
    fetch("/calendar/" + (month.value +1) + "/" + year.value).then(reply => reply.json()).then(data=> {
    calendar.value = data
    })
}

/**
 * Envoie les infos vers l'api pour enregistrer dans la bdd
 * @param {int} package_id
 * @param {int} user_id
 * @param {int} date
 */
function saveReservation(package_id, user_id, date){

    const post = new FormData()
    post.set("package_id", package_id)
    post.set("user_id", user_id)
    post.set("event_date", date)

    const options = {
        method: "post",
        body: post,
    }

    fetch("/reservations/", options).then(resp => resp.text()).then(data=> {

    })
    window.location.href = "/reservations"
}

/**
 * Donne la date du calendrier
 */
function getDateUnix(){
    const dates = new Date(Date.now())
    console.log(dates)
    const options = {month:"long"}
    month.value = dates.getMonth();
    year.value = dates.getFullYear();
    month_array.value = new Intl.DateTimeFormat("fr-CA", options).format(dates)
    console.log(month_array.value)
}

/**
 *
 * @param {string} string  info de package.description et package.includes
 * @returns
 */
function splitLine(string){
    if(string == "package_infos.description"){
        return string.split("\r\n")
    }else{
        return string.split("\r\n")
    }
}

/**
 * Mets la premièere lettre en majuscule
 * @param {string}
 * @returns
 */
function strUcFirst(a){return (a+'').charAt(0).toUpperCase()+a.substr(1)}

/**
 * Combine les valeurs pour les jour / mois/ annee
 * @param {int} date / jour
 */
function selectDate(date){
    // class scss
    selected.value = date
    select_date.value = selected.value + " " + month_array.value +" "+ year.value

}



const root = {


   setup(){

       return{
        select_package,
        details,
        inclusions,
        month,
        year,
        month_array,
        calendar,
        selected,
        select_date,
        user_id,


        showPackage,
        splitLine,
        strUcFirst,
        selectDate,
        saveReservation,
       }
   }
}

createApp(root).mount('#app')
