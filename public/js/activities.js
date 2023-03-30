export default {
  data() {
    return {
      highlightedArea: null
    }
  },
  methods: {
    highlightArea(areaId) {
      this.highlightedArea = areaId
      const areas = document.getElementsByTagName('area')
      areas[areaId - 1].classList.add('highlight')
      // Assombrir le reste de la carte
      const img = document.getElementsByTagName('img')[0]
      img.style.filter = 'brightness(50%)'
    },
    resetHighlight() {
      const areas = document.getElementsByTagName('area')
      areas[this.highlightedArea - 1].classList.remove('highlight')
      // Rétablir la luminosité de la carte
      const img = document.getElementsByTagName('img')[0]
      img.style.filter = 'brightness(100%)'
      this.highlightedArea = null
    }
  }
}


