import { createApp,ref } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

const select_package = ref({})
const details = ref()
const inclusions = ref()
const month = ref("")
const year = ref("")
const month_array = ref("")
const calendar = ref([])

/**
 * Donne la date du calendrier
 */
function getDateUnix(){
const dates = new Date(Date.now())
month.value = dates.getMonth();
year.value = dates.getFullYear();
const options = {month:"long"}
 month_array.value = new Intl.DateTimeFormat("fr-CA", options).format(dates)
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
 * Prendre un id d'un forfait et affiche ses infos spécifiques
 * Créer un array pour les details et les inclusions
 * @param {objet} object du forfait
 */
function showPackage(package_infos){
    const id = package_infos.id
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


        showPackage,
        splitLine,
        strUcFirst,
       }
   }
}

createApp(root).mount('#app')
