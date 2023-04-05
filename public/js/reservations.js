import { createApp,ref } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

const select_package = ref({})
const details = ref()
const inclusions = ref()
const month = ref("11")
const year = ref("")
const month_string = ref("")
const calendar = ref([])
const selected = ref(null)
const select_date = ref("")
const user_id = ref()
const select_date_end = ref()
const set_date_string = ref('')
const set_date_string_end = ref('')
const actual_date = ref()
const event_convert_date = ref()


/**
 * Actualise les dates à chaque 60 secondes
 */
    setInterval(e=> {
        const dates = new Date(Date.now())
        actual_date.value = dates.getUTCDate()
        console.log(dates)
    },60000)

console.log('time',actual_date)


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

    const dates = new Date(Date.now())
    const options = {month:"long"}
    month.value = dates.getMonth();
    year.value = dates.getFullYear();
    month_string.value = new Intl.DateTimeFormat("fr-CA", options).format(dates)
    /**
    * Ressort les journées du mois
    */
    fetch("/calendar/" + (month.value +1) + "/" + year.value).then(reply => reply.json()).then(data=> {
    calendar.value = data
    })
}

/**
 * Applique la valeur du css selected et converti timestamp en unix en date
 * @param {int} date / jour
 */
function selectDate(date, user_package){
    // class scss
    selected.value = date
    select_date.value = selected.value * 1000

    if(user_package.duration == 'festival'){
        select_date_end.value = select_date.value + ((86400*1000)*7)
    }else{
        select_date_end.value = select_date.value + (86400*1000)
    }

    setDate(select_date.value, select_date_end.value)
}

function setDate(select_date, select_date_end){
    if(select_date != null){
        const set_date = new Date(select_date).getUTCDate()
        const set_date_month = new Date(select_date).getUTCMonth()
        const set_month_string = new Date(Date.UTC(2000, set_date_month +1)).toLocaleString('fr-CA', { month: 'long' });
        set_date_string.value = set_date + " " + set_month_string+" "+ year.value

        const set_date_end = new Date(select_date_end).getUTCDate()
        const set_date_month_end = new Date(select_date_end).getUTCMonth()
        const set_month_string_end = new Date(Date.UTC(2000, set_date_month_end +1)).toLocaleString('fr-CA', { month: 'long' });

        if(set_month_string_end != "avril"){
            set_date_string_end.value = '30' + " " + set_month_string+" "+ year.value
        }else{
            set_date_string_end.value = set_date_end + " " + set_month_string_end+" "+ year.value
        }

    }

}

function convertDate(date){
    const convert_date = new Date(date).getUTCDate()
    event_convert_date.value = convert_date
        const convert_date_month = new Date(date).getUTCMonth()
        const convert_month_string = new Date(Date.UTC(2000, convert_date_month +1)).toLocaleString('fr-CA', { month: 'long' });
        return convert_date + " " + convert_month_string+" "+ year.value
}

/**
 * Envoie les infos vers l'api pour enregistrer dans la bdd
 * @param {int} package_id
 * @param {int} user_id
 * @param {int} date
 */
function saveReservation(package_id, user_id, date, date_end){
    const post = new FormData()
    post.set("package_id", package_id)
    post.set("user_id", user_id)
    post.set("event_date", date)
    post.set("event_date_end", date_end)

    const options = {
        method: "post",
        body: post,
    }
    fetch("/reservations/", options).then(resp => resp.text()).then(data=> {
console.log(data)
    })
    window.location.reload();
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

const root = {
   setup(){
     return{
        select_package,
        details,
        inclusions,
        month,
        year,
        month_string,
        calendar,
        selected,
        select_date,
        user_id,
        select_date_end,
        set_date_string,
        set_date_string_end,
        actual_date,
        event_convert_date,


        showPackage,
        splitLine,
        strUcFirst,
        selectDate,
        saveReservation,
        setDate,
        convertDate,
       }
   }
}

createApp(root).mount('#app')

