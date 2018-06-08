  import Hello from '@/components/Hello'
  import PatientsList from '../components/Patients/Patient'
  import PatientsView from '../components/Patients/View'
  import PatientsCreate from '../components/Patients/Create'
  import PatientsEdit from '../components/Patients/Edit'
  import PatientsExam from '../components/Exams/View'
  import PatientsPlan from '../components/Plan/View'
  import PatientsMeal from '../components/Plan/Meal'
  import PlanDetail from '../components/Plan/Detail'
  import Login from '../components/Login/Form'

  const routes = [
    {
      path: '/',
      name: 'Hello',
      component: Hello
    },
    {
      path: '/pacientes',
      name: 'Patients',
      component: PatientsList
    },
    {
      path: '/pacientes/create',
      name: 'Patients-create',
      component: PatientsCreate
    },
    {
      path: '/pacientes/:id',
      name: 'Patients-view',
      component: PatientsView
    },
    {
      path: '/pacientes/:id/editar',
      name: 'Patients-edit',
      component: PatientsEdit
    },
    {
      path: '/view/exams/pacientes/:id',
      name: 'Patients-exams-view',
      component: PatientsExam
    },
    {
      path: '/view/plano-alimentar/pacientes/:id',
      name: 'Patients-plan-view',
      component: PatientsPlan
    },
    {
      path: '/view/plano-alimentar/detalhes/refeicao/:id',
      name: 'Meal-view',
      component: PatientsMeal
    },
    {
      path: '/view/plano-alimentar/:id',
      name: 'Plan-view',
      component: PlanDetail
    },
    {
      path: '/login',
      name: 'login',
      component: Login
    }
  ]

  export default routes
