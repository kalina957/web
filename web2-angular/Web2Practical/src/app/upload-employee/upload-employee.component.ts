import { Component, OnInit, Input } from '@angular/core';
import {Employee} from '../employee';

@Component({
  selector: 'app-upload-employee',
  templateUrl: './upload-employee.component.html',
  styleUrls: ['./upload-employee.component.css']
})
export class UploadEmployeeComponent implements OnInit {

  constructor() { }

  @Input() checkAddEmployee: boolean;
  @Input() employee: Employee;
  ngOnInit() {
  }

}
