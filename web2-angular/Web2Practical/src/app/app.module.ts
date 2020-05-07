import { BrowserModule } from '@angular/platform-browser';
import { NgModule, ErrorHandler } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { AppComponent } from './app.component';
import { DepartmentsComponent } from './departments/departments.component';
import { TasksComponent } from './tasks/tasks.component';
import { EmployeesComponent } from './employees/employees.component';
import { AgGridModule } from 'ag-grid-angular';
import { DetailsTaskComponent } from './details-task/details-task.component';
import {DepartmentDetailsComponent} from './departments/department-details/department-details.component';
import {ExtDepartmentsComponent} from './departments/ext-departments/ext-departments.component';
import { ReactiveFormsModule } from '@angular/forms';
import { DetailsEmployeeComponent } from './details-employee/details-employee.component';
import { DepartmentService } from './departments/department.service';
import { DashboardComponent } from './dashboard/dashboard.component';
import { DepartmentDirectiveDirective } from './departments/department-directive.directive';
import { AppRoutingModule } from './app-routing.module';
import { EmployeesDirective } from './employees.directive';
import { FilterPipePipe } from './filter-pipe.pipe';
import { SearchComponent } from './search/search.component';
import {NgbModule} from '@ng-bootstrap/ng-bootstrap';
import { EditTaskComponent } from './edit-task/edit-task.component';
import { AddTaskComponent } from './add-task/add-task.component'
import { HttpClientModule }    from '@angular/common/http';
import {FullCalendarModule} from '@fullcalendar/angular';
import{CalendarComponent} from './calendar/calendar.component';
import { UploadEmployeeComponent } from './upload-employee/upload-employee.component';
import { EventEmitterService } from './event-emitter.service';
import { SetDepartmentComponent } from './set-department/set-department.component';
import { QuotesApiComponent } from './quotes-api/quotes-api.component';
import { CalendarApiComponent } from './calendar-api/calendar-api.component';
import { FilterEmployeePipe } from './filter-employee.pipe';
import { AngularFireDatabaseModule } from 'angularfire2/database';
import { AngularFireAuthModule } from 'angularfire2/auth';
import { TaskServiceService } from './task-service.service';
import { AngularFireModule } from '@angular/fire';
import { AngularFirestoreModule } from '@angular/fire/firestore';
import { environment } from '../environments/environment';
// import {DatePipe} from '@angular/common';
//import {HttpClientModule} from '@angular/common/http';

export const firebaseConfig = {
  apiKey: "AIzaSyBWM5D954UQkGwdE4LRlHt9XdLnsDV6soA",
  authDomain: "web2-33bf8.firebaseapp.com",
  databaseURL: "https://web2-33bf8.firebaseio.com",
  storageBucket: "web2-33bf8.appspot.com"
};

@NgModule({
  declarations: [
    AppComponent,
    DepartmentsComponent,
    TasksComponent,
    EmployeesComponent,
    DetailsTaskComponent,
    ExtDepartmentsComponent,
    DepartmentDetailsComponent,
    DetailsEmployeeComponent,
    DashboardComponent,
    DepartmentDirectiveDirective,
    EmployeesDirective,
    FilterPipePipe,
    SearchComponent,
    EditTaskComponent,
    AddTaskComponent,
    CalendarComponent,
    UploadEmployeeComponent,
    SetDepartmentComponent,
    QuotesApiComponent,
    CalendarApiComponent,
    FilterEmployeePipe
    ],
  imports: [
    BrowserModule,
    FormsModule,
    ReactiveFormsModule,
    AgGridModule.withComponents([]),
    AppRoutingModule,
    NgbModule,
    FullCalendarModule,
    HttpClientModule,
    AngularFireDatabaseModule,
    AngularFireAuthModule,
    AngularFireModule.initializeApp(environment.firebase),
    AngularFirestoreModule,
  ],
  providers: [DepartmentService,
    ErrorHandler, EventEmitterService, TaskServiceService],
  bootstrap: [AppComponent],
  
})
export class AppModule { }
