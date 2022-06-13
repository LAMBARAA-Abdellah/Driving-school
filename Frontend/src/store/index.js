import { createStore } from 'vuex'

export default createStore({
  state: {
    student: JSON.parse(localStorage.getItem('student')) ?? {
      id_candidate: "",
      nom_candidat: "",
      prenom_candidat: "",
      cin: "",
      tel: "",
      email: "",
      photo: "",
      adresse: "",
      datNaissance: "",
      sexe: "",
      permis: "",
      Total: "",
      avance: "",
      status: "",
      id_utilisateur: "1"
  },
    
  },
  getters: {
    
  },
  mutations: {
    setStudent(state, student) {
      state.student = student;
      localStorage.setItem('student', JSON.stringify(student));
    },
   
  },
  actions: {
    async fetchStudent({ commit }, id) {
      fetch(`http://localhost/Statique/Backend/student/getStudent?id=${id}`)
        .then(res => res.json())
        .then(student => {
          commit('setStudent', student);
        })
    },
  }
})
