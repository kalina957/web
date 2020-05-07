import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AppComponent} from './app.component';
import{DashboardComponent} from'./dashboard/dashboard.component';
import {EmployeesComponent} from './employees/employees.component';
import {TasksComponent} from './tasks/tasks.component';
import {DepartmentsComponent} from './departments/departments.component';
import{CalendarComponent} from './calendar/calendar.component';
import { QuotesApiComponent } from './quotes-api/quotes-api.component';
import { CalendarApi } from './calendar-api';
import { CalendarApiComponent } from './calendar-api/calendar-api.component';
const routes: Routes = [
  { path: '', redirectTo: '/dashboard', pathMatch: 'full'},
  { path: 'app', component: AppComponent },
  { path: 'dashboard', component: DashboardComponent},
  { path: 'employees', component: EmployeesComponent},
  { path: 'tasks', component:TasksComponent},
  { path: 'departments', component:DepartmentsComponent},
  { path: 'calendar', component:CalendarComponent},
  { path: 'quotes', component:QuotesApiComponent},
  { path: 'calendarApi', component:CalendarApiComponent},

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
// exports: [ RouterModule ]