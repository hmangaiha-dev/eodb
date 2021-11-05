export default
  {
    path: '/investor',
    component: () => import('layouts/InvestorLayout.vue'),
    children: [
      { path: '', component: () => import('pages/investor/Dashboard.vue') }
    ]
  }

