<template>
    <form @submit.prevent="submitForm" class="needs-validation" novalidate>
      <div class="form-group">
        <label for="subject">Matéria:</label>
        <select class="form-control" v-model="form.subject" id="subject" required>
          <option v-for="subject in subjects" :key="subject.id" :value="subject.id">
            {{ subject.name }}
          </option>
        </select>
        <div class="invalid-feedback">
          Por favor, selecione uma matéria.
        </div>
      </div>
      
      <div class="form-group">
        <label for="date">Data:</label>
        <input type="date" class="form-control" v-model="form.date" id="date" required>
        <div class="invalid-feedback">
          Por favor, selecione uma data.
        </div>
      </div>
      
      <div class="form-group">
        <label for="hours">Horas Estudadas:</label>
        <input type="number" class="form-control" v-model="form.hours" id="hours" step="0.1" required>
        <div class="invalid-feedback">
          Por favor, insira o número de horas estudadas.
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
  </template>
  
  <script>
  export default {
    name: 'FormQuantidade',
    data() {
      return {
        form: {
          subject: '',
          date: '',
          hours: ''
        },
        subjects: [] // Assumindo que os dados das matérias serão preenchidos aqui
      };
    },
    methods: {
      submitForm() {
        // Validação adicional pode ser adicionada aqui, se necessário
        if (this.form.subject && this.form.date && this.form.hours) {
          // Enviar o formulário usando axios ou fetch, por exemplo
          axios.post('/save-study-record', {
            subject: this.form.subject,
            date: this.form.date,
            hours: this.form.hours
          })
          .then(response => {
            // Lidar com a resposta do servidor
            console.log(response);
          })
          .catch(error => {
            // Lidar com erros
            console.error(error);
          });
        } else {
          // Marcar o formulário como inválido para exibir mensagens de erro
          this.$refs.form.classList.add('was-validated');
        }
      }
    },
    // mounted() {
    //   // Carregar as matérias, por exemplo, a partir de uma API
    //   axios.get('/api/subjects')
    //     .then(response => {
    //       this.subjects = response.data;
    //     })
    //     .catch(error => {
    //       console.error(error);
    //     });
    // }
  };
  </script>
  
  <style>
  /* Adicione estilos personalizados aqui, se necessário */
  </style>
  