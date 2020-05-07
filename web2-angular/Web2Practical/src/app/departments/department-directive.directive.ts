import { Directive, ElementRef,Renderer2 ,HostListener,Input} from '@angular/core';
import { Department } from './department';
import { Employee } from '../employee';

@Directive({
  selector: '[appDepartmentDirective]'
})
export class DepartmentDirectiveDirective {

  constructor(private el : ElementRef,renderer: Renderer2) {
    el.nativeElement.style.backgroundColor="#32CD32"
    el.nativeElement.style.position= "relative";
    el.nativeElement.style.margin="15pt";
    renderer.setStyle(el.nativeElement, 'border-radius', '4px');
    renderer.setStyle(el.nativeElement,"list-style-type","none");
    renderer.setStyle(el.nativeElement,"padding-bottom","5pt");
    renderer.setStyle(el.nativeElement,"padding-top","10pt");
    renderer.setStyle(el.nativeElement,"padding-left","17pt");
    renderer.setStyle(el.nativeElement, "width","17em")
    renderer.setStyle(el.nativeElement, "height","fit-content")
    renderer.setStyle(el.nativeElement, "margin-left","-20pt")
    renderer.setStyle(el.nativeElement,"text-align","left");
   }
   @Input('appDepartmentDirective') selectedDepartment: Department;   
   @HostListener('mouseenter') 
   onMouseEnter() 
   {
     this.highlight('grey');
     
   }
   @HostListener('mouseleave') onMouseLeave() 
   {
    this.highlight('#32CD32');
  }

   private highlight(color: string) {
    this.el.nativeElement.style.backgroundColor = color;
  }
}
