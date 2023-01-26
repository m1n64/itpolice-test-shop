import{l as k,h as w,m as x,b as s,o as d,g as h,p as v,u as y,c as u,w as i,a,H as V,t as $,k as c,d as r,L as B,e as f,n as C,f as L}from"./app-d68d439f.js";import{_ as N}from"./GuestLayout-3545aa11.js";import{_ as p,a as _,b as g}from"./TextInput-6198ceeb.js";import{_ as R}from"./PrimaryButton-8003a1cb.js";import"./ApplicationLogo-7a0e1dbe.js";const S=["value"],U={__name:"Checkbox",props:{checked:{type:[Array,Boolean],default:!1},value:{default:null}},emits:["update:checked"],setup(l,{emit:e}){const m=l,n=k({get(){return m.checked},set(t){e("update:checked",t)}});return(t,o)=>w((d(),h("input",{type:"checkbox",value:l.value,"onUpdate:modelValue":o[0]||(o[0]=b=>v(n)?n.value=b:null),class:"rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"},null,8,S)),[[x,s(n)]])}},q={key:0,class:"mb-4 font-medium text-sm text-green-600"},F=["onSubmit"],P={class:"mt-4"},D={class:"block mt-4"},E={class:"flex items-center"},H=r("span",{class:"ml-2 text-sm text-gray-600"},"Remember me",-1),M={class:"flex items-center justify-end mt-4"},I={__name:"Login",props:{canResetPassword:Boolean,status:String},setup(l){const e=y({email:"",password:"",remember:!1}),m=()=>{e.post(route("login"),{onFinish:()=>e.reset("password")})};return(n,t)=>(d(),u(N,null,{default:i(()=>[a(s(V),{title:"Log in"}),l.status?(d(),h("div",q,$(l.status),1)):c("",!0),r("form",{onSubmit:L(m,["prevent"])},[r("div",null,[a(p,{for:"email",value:"Email"}),a(_,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:s(e).email,"onUpdate:modelValue":t[0]||(t[0]=o=>s(e).email=o),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),a(g,{class:"mt-2",message:s(e).errors.email},null,8,["message"])]),r("div",P,[a(p,{for:"password",value:"Password"}),a(_,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:s(e).password,"onUpdate:modelValue":t[1]||(t[1]=o=>s(e).password=o),required:"",autocomplete:"current-password"},null,8,["modelValue"]),a(g,{class:"mt-2",message:s(e).errors.password},null,8,["message"])]),r("div",D,[r("label",E,[a(U,{name:"remember",checked:s(e).remember,"onUpdate:checked":t[2]||(t[2]=o=>s(e).remember=o)},null,8,["checked"]),H])]),r("div",M,[l.canResetPassword?(d(),u(s(B),{key:0,href:n.route("password.request"),class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},{default:i(()=>[f(" Forgot your password? ")]),_:1},8,["href"])):c("",!0),a(R,{class:C(["ml-4",{"opacity-25":s(e).processing}]),disabled:s(e).processing},{default:i(()=>[f(" Log in ")]),_:1},8,["class","disabled"])])],40,F)]),_:1}))}};export{I as default};
