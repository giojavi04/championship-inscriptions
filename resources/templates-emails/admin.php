<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Email Leads</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                 <h2>Nueva Inscripción:</h2>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <ul>
                        <li><span>Nombre:</span> <?= $lead->name ?></li>
                        <li><span>Apellido:</span> <?= $lead->last_name ?></li>
                        <li><span>Nombre del equipo:</span> <?= $lead->name_team ?></li>
                        <li><span>Email:</span> <?= $lead->email ?></li>
                        <li><span>Disciplina a participar:</span> <?= $lead->discipline_to_participate ?></li>
                        <li><span>Tipo de equipo:</span> <?= $lead->type_team ?></li>
                        <li><span>Teléfono:</span> <?= $lead->phone ?></li>
                        <li><span>Comentario:</span> <?= $lead->message ?></li>
                        <li><span>Fecha de inscripción:</span> <?= $lead->created_at ?></li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
