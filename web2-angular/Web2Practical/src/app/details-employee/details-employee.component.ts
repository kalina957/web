import { Component, OnInit, Input } from '@angular/core';
import {Employee} from '../employee';
import { Employees} from '../mock-employees';

@Component({
  selector: 'app-details-employee',
  templateUrl: './details-employee.component.html',
  styleUrls: ['./details-employee.component.css']
})
export class DetailsEmployeeComponent implements OnInit {

  constructor() { }

  @Input() employee: Employee;
  
  ngOnInit() {
  }

}
