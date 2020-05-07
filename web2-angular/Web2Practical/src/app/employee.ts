import { Department } from './departments/department';
import { Task } from './task';


export class Employee {
    id:number;
    department_id:number;
    first_name:string;
    last_name:string;
    birth_date:string;
    department:Department;
    tasks:Task[];

      constructor(department_id:number,first_name:string,last_name:string,birth_date:string){

this.department_id = department_id;
this.first_name = first_name;
this.last_name= last_name;
this.birth_date=birth_date;
      }
      setDepartment(department:Department){
          this.department = department;
      }

      addTask(task: Task){
          this.tasks.push(task);
      }

      getTasks(): Task[]{
          return this.tasks;
      }
  }